<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Face extends Controller_Site_Base {
    
    public function action_index()
	{	
		$login = Session::instance()->get('login');
		
		if (Auth::instance()->logged_in())
		{
			$this->redirect('/');
		}
			
		if ($post = $this->request->post())
		{
			Auth::instance()->login($post['username'],$post['password']);
			
			if (Auth::instance()->logged_in())
			{				
				if (Auth::instance()->logged_in("admin"))
				{
					$this->redirect(URL::base(true).'admin');
				}
			
				$this->redirect('/');
			}
		}
	
		$this->template->content = View::factory('site/user/login')->bind('login',$login);
    }
}