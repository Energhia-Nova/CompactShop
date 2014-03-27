<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Products extends Controller_Admin_Admin {
    
    // Products list
    public function action_index()
    {
        $products = ORM::factory('product')->find_all();
        $view = View::factory('admin/product/products_list')
        ->bind('products',$products);
        $this->template->content = $view;
    }
    
    // new Product
    public function action_new_product()
    {
		$categories = ORM::factory('menu_item')->find_all();
		
		$view = View::factory('admin/product/new_product')->bind('categories',$categories);
	
        if ($post = $this->request->post())
        {            
			$product = ORM::factory('product');
			$product->name = $post['name'];
			$product->description = $post['description'];
			$product->alias = $post['url'];
			$product->stock = $post['stock'];
			$product->category_id = $post['category_id'];
			// $product->sup_id = $post['supplier'];
			$product->price = $post['price'];
			
			if (isset($_FILES['picture']) and !empty($_FILES['picture']['name']))
			{
				$product->image = $_FILES['picture']['name'];
				move_uploaded_file($_FILES['picture']['tmp_name'],'uploads/products/'.$_FILES['picture']['name']);
			}
			
			$product->save();
			
			if ($product->id)
			{
				$this->request->redirect('admin/products/edit-product/'.$product->id);
			}
        }
        
        $this->template->content = $view;
    }
	
	public function action_edit_product()
	{
		$product_id = $this->request->param('id');
		
		$categories = ORM::factory('menu_item')->find_all();
		
		if ($post = $this->request->post())
		{
			$product = ORM::factory('product',$product_id);
			$product->name = trim($post['name']);
			$product->alias = trim($post['url']);
			$product->stock = trim($post['stock']);
			$product->category_id = $post['category_id'];
			$product->price = number_format($post['price'],2,'.','');
			$product->description = trim($post['description']);
			
			if (isset($_FILES['picture']) and !empty($_FILES['picture']['name']))
			{
				$product->image = $_FILES['picture']['name'];
				move_uploaded_file($_FILES['picture']['tmp_name'],'uploads/products/'.$_FILES['picture']['name']);
			}
			
			$product->save();
		}
		
		$product = ORM::factory('product',$product_id);

		// Tested image src
		// $product->image = 'test.png';
		
		if (!empty($product->image))
		{
			$image = $product->image;
			View::bind_global('image',$image);
		}
		
		$view = View::factory('admin/product/edit_product')
		->bind('product',$product)
		->bind('selected',$selected)
		->bind('categories',$categories);
		$this->template->content = $view;
	}
	
	public function action_remove()
	{		
		if ($product_id = $this->request->param('id'))
		{
			ORM::factory('product',$product_id)->delete();
		}
		
		$this->request->redirect('/admin/products');
	}
}