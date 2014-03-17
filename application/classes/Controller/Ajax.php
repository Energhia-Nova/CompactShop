<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller_Base {

	public function action_index()
	{
		exit;
	}
	
	public function action_check()
	{
		if (!Auth::instance()->logged_in()) exit;
		
		/* Загляним в нашу таблицу с заказами и проверим
		   существует ли текущий заказ
		*/
		$count = ORM::factory('order')->where('user_id','=',Auth::instance()->get_user()->id)->where('status_id','=',1)->count_all();
		
		/* Если есть уже заказ данного пользователя */
		if ($count>0)
		{
			echo $count;
		}
		else
		{
			echo 0;
		}
		
		exit;
	}

	public function action_cart()
	{		
		if (!Auth::instance()->logged_in()) exit;
		
		/* Так же проверка, если у пользователя уже есть заказ, то ничего ни делаем */
		$count = ORM::factory('order')->where('user_id','=',Auth::instance()->get_user()->id)->where('status_id','=',1)->count_all();
		
		/* Если есть уже заказ данного пользователя */
		if ($count>0)
		{
			exit;
		}
		
		// Добавка/отмена продукта в корзину
		if ($post = $this->request->post())
		{
			// Отмена покупки
			if (isset($post['func']) and $post['func']=='cancel')
			{
				$cart = ORM::factory('cart',array('user_id'=>Auth::instance()->get_user()->id, 'product_id'=>$post['product_id']));
				
				$amount = $cart->amount;
				
				if ($amount==1)
				{
					$cart->delete();
				}
				else
				{
					$amount--;
					$cart->amount = $amount;
					$cart->save();				
				}
			
				exit;
			}
		
			$cart = ORM::factory('cart',array('user_id'=>Auth::instance()->get_user()->id,'product_id'=>$post['product_id']));
			// Если есть такой продукт в базе, то увеличим кол-во
			if ($cart->loaded())
			{
				$amount = $cart->amount;
				$amount++;
				$cart->amount=$amount;
				$cart->save();
			} // Если еще нету такого продукта в базе, то добавим
			else
			{		
				// Если заказа не существует, создадим, в корзине заказов новый заказ
				$cart = ORM::factory('cart');
				$cart->user_id = Auth::instance()->get_user()->id;
				$cart->product_id = $post['product_id'];
				$cart->amount = 1;
				$cart->save();
				
				/* Как только в корзине будет сформирован заказ
				   корзина будет очищина и все будет добавлено в
				   таблицу готовых заказов
				*/
			}
		}
		exit;
	}
	
	public function action_order()
	{
		// Сюда так же будет входить проверка на админа
		if (!Auth::instance()->logged_in()) exit;
	
		if ($post = $this->request->post())
		{
			$order_id = $post['ordid'];
			$status_id = $post['status'];
			$order=ORM::factory('order',$order_id);
			$order->status_id = $status_id;
			$order->save();
		}
		
		exit;
	}
}