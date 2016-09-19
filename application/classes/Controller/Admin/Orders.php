<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Orders extends Controller_Admin_Base {
	
	public function action_index()
	{
		$orders = ORM::factory('order')->find_all();
		$this->template->content = View::factory('admin/order/orders_list')->bind('orders',$orders);
	}

	public function action_edit()
	{
		$order_id = $this->request->param('id');
		$order = ORM::factory('order',$order_id);
		$statuses = ORM::factory('status')->find_all();
		$this->template->content = View::factory('admin/order/order_edit')
			->bind('order',$order)
			->bind('statuses',$statuses);
	}
	
	public function action_remove()
	{
		if ($order_id = $this->request->param('id'))
		{
			ORM::factory('Order',$order_id)->delete();
		}
		
		$this->request->redirect('admin/orders');
	}
}