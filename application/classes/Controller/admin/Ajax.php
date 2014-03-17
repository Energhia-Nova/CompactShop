<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Ajax extends Controller {
     
     public function action_index()
     {  
        if ($post = $this->request->post())
        {
            echo "1"; exit;
            $category = ORM::factory('Category');
            $category->where('title','=',trim($post['category']))
                       ->find()
                       ->delete();
                       
            echo "1";
        }
     }
     
}