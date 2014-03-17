<?php defined('SYSPATH') or die('No direct script access.');

class Model_Cart extends ORM {
        
	protected $_table_name = "cart";
	
	protected $_belongs_to = array('product'=>array());
		
}