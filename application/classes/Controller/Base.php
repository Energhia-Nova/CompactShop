<?php defined('SYSPATH') or die('No direct script access.');

abstract Class Controller_Base extends Controller_Template {
    
    public $template = 'main';
    
    public function before()
    {
        parent::before();
		
		$language = ORM::factory('Language')->where('on','=',1)->find();
		$country = ORM::factory('Country')->where('on','=',1)->find();
		$currency = (!empty($country->currency)) ? $country->currency : '$';		
		View::set_global('currency',$currency);
		I18n::lang($language->short);
		
		if (!Auth::instance()->logged_in())
		{
			$purchases = array(); 
			$total_price = 0.00;
		}
		else
		{
			$cart = ORM::factory('cart');
			$purchases = $cart->where('user_id','=',Auth::instance()->get_user()->id)->find_all();
			$total_price = 0;
			foreach ($purchases as $p)
			{
				$product = ORM::factory('product',$p->product_id);
				$total_price+=$product->price;
			}
			$total_price = number_format($total_price,2,'.','');
		}
				
		//$pages = Kohana::$config->load('pages');
		$vhormenu = View::factory('hormenu')->bind('pages',$pages)->bind('total_price',$total_price);
        $pages = ORM::factory('page')->get_pages();
        $this->template->title = 'CompactShop CMS';
        $this->template->description = 'CompactShop CMS';
		$this->template->categories = Menu::factory()->render();
        $this->template->content = '';
		$this->template->pagination = '';
		$this->template->purchases = $purchases;
        $this->template->styles = array('jquery-ui','main',);
        $this->template->scripts = array('jquery-1.10.2.min','jquery-migrate-1.2.1.min','jquery.hotkeys','jquery.cookie','jquery-ui','jquery.ewigkeit.menu','site');
		$this->template->hormenu = $vhormenu;
    }
	
} // End Common