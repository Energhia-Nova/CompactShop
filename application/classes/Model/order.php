<?php defined('SYSPATH') or die('No direct script access.');

class Model_Order extends ORM {

	protected $_belongs_to = array('product'=>array(),'status'=>array(),'user'=>array());
	
	protected $_has_many = array('purchases'=>array('model'=>'purchase'));
		
	public function total_price()
	{
		$total_price = 0;
		
		foreach ($this->purchases->find_all() as $purchase)
		{
			$total_price+=($purchase->amount*$purchase->product->price);
		}
		
		return $total_price;
	}
}