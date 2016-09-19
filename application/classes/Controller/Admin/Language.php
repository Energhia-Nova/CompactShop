<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Language extends Controller_Admin_Base {
     
    public function action_index()
    {
		if ($lang = $this->request->param('lang'))
		{
			$langs = ORM::factory('Language')->where('on','=',1)->find_all();
			
			foreach ($langs as $l)
			{
				$language = ORM::factory('Language',$l->id);
				$language->on=0;
				$language->update();
			}
			
			$lng = ORM::factory('Language')->where('name','=',$lang)->find();
			$lng->on=1;
			$lng->update();
			
			I18n::lang($language->short);
		}	
	
		$languages = ORM::factory('Language')->find_all();
		$this->template->functional = View::factory('admin/functional/panel');
        $this->template->content = View::factory('admin/language/language')->bind('languages',$languages);
    }
}