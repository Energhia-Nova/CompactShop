<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_Base {
    // @Enter Profile
    public function action_index()
	{
		if (!Auth::instance()->logged_in()) $this->redirect(URL::base(true));
		
		if ($post = $this->request->post())
		{
			$profile = ORM::factory('profile');
			$profile->where('user_id','=',Auth::instance()->get_user()->id)->find();
			$profile->user_id = Auth::instance()->get_user()->id;
			$profile->age = $post['age'];
			$profile->contacts = $post['contacts'];			
			$profile->save();
		}
		
		$user = Auth::instance()->get_user();
		$view = View::factory('user/profile')->bind('user',$user);
		$this->template->content=$view;
    }
}