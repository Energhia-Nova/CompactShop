<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Home extends Controller_Site_Base {
    
    public function action_index()
    {
		$products = ORM::factory('product')->limit(15)->find_all();
											
		$view = View::factory('site/products/products')
			->bind('products',$products);
															
		$this->template->content = $view;
    }
}