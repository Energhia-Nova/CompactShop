<?php defined('SYSPATH') or die('No direct script access.');

class Model_Profile extends ORM {
        
	protected $_table_name = "profile";
	
	protected $_belongs_to = array('user'=>array());
		
}