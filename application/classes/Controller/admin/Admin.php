<?php defined('SYSPATH') or die('No direct script access.');

abstract Class Controller_Admin_Admin extends Controller_Template {
    
    public $template = 'admin/panel/panel';
    
    public function before()
    {
        parent::before();
		
		if (!Auth::instance()->logged_in("admin")) $this->redirect(URL::base(true));
                
        $funcview = View::factory('admin/functional/'.$this->request->controller());
        $this->template->title = 'Magazin Panel';
        $this->template->description = 'Development Magazin Mode';
        $this->template->functional = $funcview;
        $this->template->content = '';
        $this->template->styles = array('admin');
        $this->template->scripts = array('jquery-1.9.1.min');
    }
} // End Admin Base Controller