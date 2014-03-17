<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Orders extends Controller_Base {
    
	// Orders
    public function action_index()
	{
		if (!Auth::instance()->logged_in()) $this->redirect(URL::base(true));
		
		$orders = ORM::factory('order')->where('user_id','=',Auth::instance()->get_user()->id)->find_all();
				
		$this->template->content = View::factory('user/orders')->bind('orders',$orders);
    }
}