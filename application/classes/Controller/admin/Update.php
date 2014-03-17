<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Update extends Controller_Admin_Admin {
     
    // Modules list
    public function action_index()
    {	
		$this->template->functional = View::factory('admin/functional/panel');
        $this->template->content = 'Update';
    }
}