<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Language extends Controller_Admin_Admin {
     
    // Modules list
    public function action_index()
    {	
		$this->template->functional = View::factory('admin/functional/panel');
        $this->template->content = 'Language';
    }
}