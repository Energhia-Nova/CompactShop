<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Options extends Controller_Admin_Base {
        
    // Options list
    public function action_index()
    {
		$options = ORM::factory('option')->find_all();
        $view = View::factory('admin/option/options_list')
        ->bind('options',$options);
        $this->template->content = $view;
    }
	
    public function action_new_option()
    {
        $view = View::factory('admin/option/new_option')->render();
        
        if ($post = $this->request->post())
        {        
			$option = ORM::factory('option');
			$option->name = trim($post['name']);
			$option->value = trim($post['value']);
			$option->alias = trim($post['alias']);
			$option->save();
        }
        
        $this->template->content = $view;
    }
	
	public function action_edit()
	{
		$option_id = $this->request->param('id');
		
		if ($post = $this->request->post())
        {
			$option = ORM::factory('option',$option_id);
			$option->name = trim($post['name']);
			$option->value = trim($post['value']);
			$option->alias = trim($post['alias']);
			$option->save();
        }
		
		$option = ORM::factory('option',$option_id);
		$view = View::factory('admin/option/edit_option')->bind('option',$option);
		$this->template->content = $view;
	}
	
	public function action_remove()
	{
		if ($option_id = $this->request->param('id'))
		{
			ORM::factory('option',$option_id)->delete();
		}
		
		$this->request->redirect('admin/options');
	}
    
}