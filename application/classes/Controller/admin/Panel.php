<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Panel extends Controller_Admin_Base {
    
    public function action_index()
    {
		$all_products = ORM::factory('Product')->count_all();
		$view = View::factory('admin/panel/info')->bind('all_products',$all_products);
        $this->template->content = $view;
    }
        
}