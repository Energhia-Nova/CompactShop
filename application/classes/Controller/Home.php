<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Base {
    
    public function action_index()
    {
		$products = ORM::factory('product')->limit(15)->find_all();
							
		$view = View::factory('products/products')
			->bind('products',$products);
															
		$this->template->content = $view;
    }
}