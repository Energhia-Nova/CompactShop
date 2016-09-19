<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Profile extends Controller_Site_Base {
    
    public function action_index()
	{
		if (!Auth::instance()->logged_in()) $this->redirect(URL::base(true));
		
		if ($post = $this->request->post())
		{
			$profile = ORM::factory('Profile');
			$profile->where('user_id','=',Auth::instance()->get_user()->id)->find();
			$profile->user_id = Auth::instance()->get_user()->id;
			$profile->age = $post['age'];
			$profile->name = $post['name'];
			$profile->contacts = $post['contacts'];			
			$profile->save();
		}
		
		$user = Auth::instance()->get_user();
		$view = View::factory('site/user/profile')->bind('user',$user);
		$this->template->content=$view;
    }
}