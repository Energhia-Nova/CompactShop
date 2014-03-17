<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Products extends Controller_Base {
    
    public function action_index()
    {
		$get_category = Request::detect_uri(); 
		
		$get_category = preg_replace('/page\/(\d)/','',$get_category);
		$get_category = ltrim($get_category,'/');
		$get_category = rtrim($get_category,'/');
				
		$category = ORM::factory('category',array('url'=>$get_category));
		
		// $products = $category->products->find_all();
		
		$total_products = $category->products->count_all();
						
		// set-up the pagination
		$pagination = Pagination::factory(array(
			'total_items' => $total_products,
			'items_per_page' => 1, // this will override the default set in your config
		));
		
		$products = $category->products
			->offset($pagination->offset)
			->limit($pagination->items_per_page)
			->find_all();
		
		$this->template->content = View::factory('products/products')
			->bind('products',$products);
		
		$this->template->pagination = $pagination;
	}
	
	public function action_show()
	{
		if ($product_id = $this->request->param('id'))
		{
			$product = ORM::factory('product',$product_id);
			$view = View::factory('products/show')->bind('product',$product);
			$this->template->content = $view;
		}
	}
}