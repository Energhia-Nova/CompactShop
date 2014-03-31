<?php defined('SYSPATH') or die('No direct script access.');

abstract Class Controller_Admin_Base extends Controller_Template {
    
    public $template = 'admin/panel/panel';
    
    public function before()
    {
        parent::before();
		
		if (!Auth::instance()->logged_in("admin")) $this->redirect(URL::base(true));
		
		$language = ORM::factory('Language')->where('on','=',1)->find();
		$country = ORM::factory('Country')->where('on','=',1)->find();
		$currency = (!empty($country->currency)) ? $country->currency : '$';
		View::set_global('currency',$currency);
		I18n::lang($language->short);
		
		$store_name = ORM::factory('Option',array('alias'=>'store-name'))->value;
                
        $funcview = View::factory('admin/functional/'.$this->request->controller());
        $this->template->title = $store_name. ' Admin';
        $this->template->description = $store_name. ' Admin';
        $this->template->functional = $funcview;
        $this->template->content = '';
        $this->template->styles = array('admin');
        $this->template->scripts = array('jquery-1.9.1.min');
    }
}