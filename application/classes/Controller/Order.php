<?php defined('SYSPATH') or die('no direct script access.');

class Controller_Order extends Controller_Base {
    
    public function action_index()
    {	
		if (!Auth::instance()->logged_in()) $this->redirect(URL::base(true));
				
		// Вываливаем все что есть в корзине
		// Пока заказ админом не применен в админке пользователь не может создать второй заказ!
		
		$total_price = 0;
		
		/* Если в корзине ничего нету, то смотрим в таблицу заказов,
		   если в у пользователя есть заказ, со статусом 1, т.е. в ожидании,
		   то выводим его
		*/
		$count = ORM::factory('order')
			->where('user_id','=',Auth::instance()->get_user()->id)
			->where('status_id','=',1)
			->count_all();
								
		/* Если есть уже заказ данного пользователя */
		if ($count>0)
		{
			/* Вытащим заказ, который ожидает исполнения */
			$order = ORM::factory('order')->where('user_id','=',Auth::instance()->get_user()->id)->where('status_id','=',1)->find();
			
			/* Берем все покупки данного заказа */
			$purchases = $order->purchases->find_all();
			
			/* Подсчитаем итоговую цену заказа */
			foreach ($purchases as $purchase)
			{
				$total_price+=($purchase->amount*$purchase->product->price);
			}
			
			$number = $order->id;
									
		} /* Если нету, то из корзины берется и переносится */
		else
		{		
			/* Здесь берутся все покупки из корзины */
			$cart_purchases = ORM::factory('cart')
				->where('user_id','=',Auth::instance()->get_user()->id)
				->find_all();
			
			/* Конечно, в корзине должно что-то быть чтобы переносить в заказ, 
			   проверим есть ли что-то в корзине, если нету ничего,
			   то перенаправим пользователя на главную
			*/
			if ($cart_purchases->count()==0) $this->redirect(URL::base(true));
					
			/* Установим статус заказу 1 */
			$order = ORM::factory('order');
			$order->user_id = Auth::instance()->get_user()->id;
			$order->status_id=1;
			$order->save();
												
			/* Поскольку, постольку мы нажали кнопку R ( "ready" ),
			   это значит что мы набрали нужные покупки и наш заказ готов,
			   то удалим его из корзины и добавим в таблицу заказов
			*/
			foreach ($cart_purchases as $p)
			{
				$purchase = ORM::factory('purchase');
				$purchase->order_id = $order->id;
				$purchase->product_id = $p->product_id;
				$purchase->amount = $p->amount;
				$purchase->save();				
				// Удаляем все из корзины
				ORM::factory('cart',$p->id)->delete();			
			}
			
			$number = $order->id;
			
			$purchases = $order->purchases->find_all();
			
			/* Подсчитаем итоговую цену заказа */
			foreach ($purchases as $purchase)
			{
				$total_price+=($purchase->amount*$purchase->product->price);
			}
		}
		
		/* визуально очистим корзину "инфографа" */
		$this->template->purchases = array();
				
		$total_price = number_format($total_price,2,'.','');
										
		$this->template->content = View::factory('user/order')->bind('purchases',$purchases)->bind('total_price',$total_price)->bind('number',$number);
		
    }
	
} // End Order.