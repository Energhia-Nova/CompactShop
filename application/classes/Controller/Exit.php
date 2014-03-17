<?php defined('SYSPATH') or die('no direct script access.');

class Controller_Exit extends Controller_Base {
    
    public function action_index()
    {	
		Auth::instance()->logout();
		$this->redirect(URL::base(true));
    }
	
} // End Exit.