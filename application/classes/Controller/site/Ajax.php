<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Ajax extends Controller_Site_Base {

	public function action_index()
	{
		exit;
	}
	
	public function action_check()
	{
		if (!Auth::instance()->logged_in()) exit;
		
		$count = ORM::factory('Order')->where('user_id','=',Auth::instance()->get_user()->id)->where('status_id','=',1)->count_all();
		
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
		
		$count = ORM::factory('Order')->where('user_id','=',Auth::instance()->get_user()->id)->where('status_id','=',1)->count_all();
		
		if ($count>0)
		{
			exit;
		}
		
		if ($post = $this->request->post())
		{
			if (isset($post['func']) and $post['func']=='cancel')
			{
				$cart = ORM::factory('Cart',array('user_id'=>Auth::instance()->get_user()->id, 'product_id'=>$post['product_id']));
				
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
		
			$cart = ORM::factory('Cart',array('user_id'=>Auth::instance()->get_user()->id,'product_id'=>$post['product_id']));
		
			if ($cart->loaded())
			{
				$amount = $cart->amount;
				$amount++;
				$cart->amount=$amount;
				$cart->save();
			} 
			else
			{
				$cart = ORM::factory('Cart');
				$cart->user_id = Auth::instance()->get_user()->id;
				$cart->product_id = $post['product_id'];
				$cart->amount = 1;
				$cart->save();
			}
		}
		exit;
	}
	
	public function action_order()
	{
		if (!Auth::instance()->logged_in()) exit;
	
		if ($post = $this->request->post())
		{
			$order_id = $post['ordid'];
			$status_id = $post['status'];
			$order=ORM::factory('Order',$order_id);
			$order->status_id = $status_id;
			$order->save();
		}
		
		exit;
	}
}