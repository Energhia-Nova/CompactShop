<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM {
        
    protected $_table_name = "menu_items";
	
	protected $_has_many = array('products'=>array());
        
}