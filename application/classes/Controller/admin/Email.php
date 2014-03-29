<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Email extends Controller_Admin_Base {
     
    public function action_index()
    {
		if ($post = $this->request->post())
		{				
			$config = Kohana::$config->load('email');
			
			Email::connect($config);
					 
			$to = $post['email'];
			$subject = 'Message from Kohana Framework Site';
			$from = 'CompactShopCMS';
			$message = 'Probe Email';
		 
			Email::send($to, $from, $subject, $message, $html = false);
		}
	
		$this->template->functional = View::factory('admin/functional/panel');
		$this->template->content = View::factory('admin/functional/email');
    }
	
}