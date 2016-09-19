<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Brands extends Controller_Admin_Base {
     
    // Brands list
    public function action_index()
    {
        $brands = ORM::factory('brand')->find_all();
        $view = View::factory('admin/brand/brands_list')
        ->bind('brands',$brands);
        $this->template->content = $view;
    }
   
    public function action_new_brand()
    {
        $view = View::factory('admin/brand/new_brand');
        $this->template->content = $view;
        
        if ($post = $this->request->post())
        {
			$brand = ORM::factory('brand');
			$brand->name = trim($post['name']);
			$brand->alias = trim($post['alias']);
			$brand->description = trim($post['description']);
			$brand->save();
        }
    }
	
	public function action_edit()
	{
		$brand_id = $this->request->param('id');
		
		if ($post = $this->request->post())
		{			
			$brand = ORM::factory('brand',$brand_id);
			$brand->name = trim($post['name']);
			$brand->alias = trim($post['alias']);
			$brand->description = trim($post['description']);
			$brand->save();
		}
		
		$brand = ORM::factory('brand',$brand_id);
		$view = View::factory('admin/brand/edit_brand')->bind('brand',$brand);
		$this->template->content = $view;
	}
	
	public function action_remove()
	{
		if ($brand_id = $this->request->param('id'))
		{
			ORM::factory('Brand',$brand_id)->delete();
		}
		
		$this->request->redirect('admin/brands');
	}
}