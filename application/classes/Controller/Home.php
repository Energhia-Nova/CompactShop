<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Base {
    
    public function action_index()
    {
		$products = ORM::factory('product')->limit(15)->find_all();
		
		/*$total_products = ORM::factory('product')->count_all();
		
		// set-up the pagination
		$pagination = Pagination::factory(array(
			'total_items' => $total_products,
			'items_per_page' => 2, // this will override the default set in your config
		));
		
		$products = ORM::factory('product')
			->offset($pagination->offset)
			->limit($pagination->items_per_page)
			->find_all();*/
					
		$view = View::factory('products/products')
			->bind('products',$products);
															
		$this->template->content = $view;
    }
}