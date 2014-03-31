<?php defined('SYSPATH') or die('No direct script access.');

abstract Class Controller_Site_Base extends Controller_Template {
    
    public $template = 'main';
	
	public $store_name = 'Store';
    
    public function before()
    {
        parent::before();
		
		$this->store_name = ORM::factory('Option')->where('alias','=','store-name')->find()->value;	
		$language = ORM::factory('Language')->where('on','=',1)->find();
		$country = ORM::factory('Country')->where('on','=',1)->find();
		$currency = (!empty($country->currency)) ? $country->currency : '$';		
		View::set_global('currency',$currency);
		View::set_global('store_name',$this->store_name);
		I18n::lang($language->short);
		
		if (!Auth::instance()->logged_in())
		{
			$purchases = array(); 
			$total_price = 0.00;
		}
		else
		{
			$cart = ORM::factory('Cart');
			$purchases = $cart->where('user_id','=',Auth::instance()->get_user()->id)->find_all();
			$total_price = 0;
			foreach ($purchases as $p)
			{
				$product = ORM::factory('Product',$p->product_id);
				$total_price+=$product->price;
			}
			$total_price = number_format($total_price,2,'.','');
		}
		
		//$pages = Kohana::$config->load('pages');
		$menu = View::factory('site/menu')->bind('pages',$pages)->bind('total_price',$total_price);
        $pages = ORM::factory('Page')->get_pages();
        $this->template->title = $this->store_name;
        $this->template->description = $this->store_name;
		$this->template->categories = Menu::factory()->render();
        $this->template->content = '';
		$this->template->pagination = '';
		$this->template->purchases = $purchases;
        $this->template->styles = array('jquery-ui','main',);
        $this->template->scripts = array('jquery-1.10.2.min','jquery-migrate-1.2.1.min','jquery.hotkeys','jquery.cookie','jquery-ui','jquery.ewigkeit.menu','site');
		$this->template->hormenu = $menu;
    }
	
}