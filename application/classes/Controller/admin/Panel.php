<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Panel extends Controller_Admin_Base {
    
    public function action_index()
    {   
		$view = View::factory('admin/panel/info');
        $this->template->content = $view;
    }
        
}