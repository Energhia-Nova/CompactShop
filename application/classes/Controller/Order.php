<?php defined('SYSPATH') or die('no direct script access.');

class Controller_Order extends Controller_Base {
    
    public function action_index()
    {	
		if (!Auth::instance()->logged_in()) $this->redirect(URL::base(true));
				
		$total_price = 0;

		$count = ORM::factory('order')
			->where('user_id','=',Auth::instance()->get_user()->id)
			->where('status_id','=',1)
			->count_all();
								
		if ($count>0)
		{
			$order = ORM::factory('order')->where('user_id','=',Auth::instance()->get_user()->id)->where('status_id','=',1)->find();
			
			$purchases = $order->purchases->find_all();
			
			foreach ($purchases as $purchase)
			{
				$total_price+=($purchase->amount*$purchase->product->price);
			}
			
			$number = $order->id;
									
		}
		else
		{
			$cart_purchases = ORM::factory('cart')
				->where('user_id','=',Auth::instance()->get_user()->id)
				->find_all();
			
			if ($cart_purchases->count()==0) $this->redirect(URL::base(true));
					
			$order = ORM::factory('order');
			$order->user_id = Auth::instance()->get_user()->id;
			$order->status_id=1;
			$order->save();
												
			foreach ($cart_purchases as $p)
			{
				$purchase = ORM::factory('purchase');
				$purchase->order_id = $order->id;
				$purchase->product_id = $p->product_id;
				$purchase->amount = $p->amount;
				$purchase->save();				
				
				ORM::factory('cart',$p->id)->delete();			
			}
			
			$number = $order->id;
			
			$purchases = $order->purchases->find_all();
			
			foreach ($purchases as $purchase)
			{
				$total_price+=($purchase->amount*$purchase->product->price);
			}
		}
		
		$this->template->purchases = array();
				
		$total_price = number_format($total_price,2,'.','');
										
		$this->template->content = View::factory('user/order')->bind('purchases',$purchases)->bind('total_price',$total_price)->bind('number',$number);
		
    }
	
} // End Order.