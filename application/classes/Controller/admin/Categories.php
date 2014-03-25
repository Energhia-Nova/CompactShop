<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Categories extends Controller_Admin_Admin {

    // Categories list
    public function action_index()
    {       
        $categories = Menu::factory()->render();
        $view = View::factory('admin/category/categories_list')->bind('categories',$categories);
        $this->template->content = $view;
    }
    // New Category
    public function action_new_category()
    {
        $categories = ORM::factory('category')->find_all();
        $view = View::factory('admin/category/new_category')
        ->bind('categories',$categories);
        
        if ($post = $this->request->post())
        {
			$subcategory = ORM::factory('category',array('url'=>$post['subcat_alias']));
		
            try
            {
                $category = ORM::factory('category');
                $category->title = trim($post['name']);
                $category->url = $post['subcat_alias'].'/'.trim($post['url']);
				$category->parent_id = $subcategory->id;
                $category->save();
            }
            catch(ORMException $e)
            {
                echo Debug::vars($e);
            }
        }
		$categories = Menu::factory()->render();
		$view = View::factory('admin/category/new_category')->bind('categories',$categories);
        
        $this->template->content = $view;
    }

}