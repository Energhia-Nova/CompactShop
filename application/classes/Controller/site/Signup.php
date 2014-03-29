<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Signup extends Controller_Site_Base {

	public function action_index()
	{	
		if ($post = $this->request->post())
		{					
			$post['username'] = $post['login'];

			$post['accepted']=sha1(Cookie::$salt.'may'.$post['username']);
			$post['code'] = mt_rand(10000,99999);
			
			try
			{
				$user = ORM::factory('user')->create_user($post, array('username','email','password','accepted','code'));
				$user->add('roles',ORM::factory('role',array('name'=>'login')));
				
				mail($post['email'],'Store. Registration','For the registration on the site [Site]  go by the next link set the activation code \r\n Registration Link: /sign-up/confirm/'.$post['accepted']. ' \r\n Activation Code: '.$post['code']);
				
				$this->redirect('/sign-up/confirm/'.$post['accepted']);
			}
			catch (ORM_Validation_Exception $e)
			{
				$errors = $e->errors('models');
				
			}
								
		}
				
		$this->template->content = View::factory('site/user/registration_form');
	}
	
	public function action_confirm()
	{
		$accepted = $this->request->param('link');
		
		$post = $this->request->post();
		
		if (!empty($accepted) and !empty($post['code']))
		{
			$user = ORM::factory('user',array('accepted'=>$accepted));
			
			if ($user->code==$post['code'])
			{
				$user->confirmed=1;
				$user->save();
				
				Session::instance()->set('login',$user->username);
								
				$this->redirect('face');
			}
		}
		
		$this->template->content = View::factory('site/user/confirmation_form');
	}

}