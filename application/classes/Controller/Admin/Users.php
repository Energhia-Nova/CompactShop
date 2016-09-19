<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin_Base {
    
    // Users list
    public function action_index()
    {
        $users = ORM::factory('user')->find_all();
        $view = View::factory('admin/user/users_list')->bind('users',$users);
        $this->template->content = $view;
    }
	// User Creation
	public function action_create_user()
	{
		$view = View::factory('admin/user/create_user');
		$this->template->content = $view;
	}
	
	public function action_edit()
	{
		$user_id = $this->request->param('id');
		
		if ($post = $this->request->post())
		{
			$user = ORM::factory('user',$user_id);
			$user->email = $post['email'];
			$user->username = $post['login'];
			$user->save();
			
			$profile = ORM::factory('Profile')->where('user_id','=',$user_id)->find();
			
			if ($profile->loaded())
			{
				$profile->age = $post['age'];
				$profile->name = $post['name'];
				$profile->contacts = $post['contacts'];
				$profile->save();
			}
			else
			{
				$profile = ORM::factory('Profile');
				$profile->user_id = $user_id;
				$profile->age = $post['age'];
				$profile->name = $post['name'];
				$profile->contacts = $post['contacts'];
				$profile->save();
			}
		}
		
		$user = ORM::factory('user',$user_id);
		$view = View::factory('admin/user/edit_user')->bind('user',$user);
		$this->template->content = $view;
	}
	
	public function action_remove()
	{
		if ($user_id = $this->request->param('id'))
		{
			ORM::factory('user',$user_id)->delete();
		}
		
		$this->request->redirect('admin/users');
	}
}