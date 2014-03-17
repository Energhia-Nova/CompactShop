<?php defined('SYSPATH') or die('No direct script access.');

class Model_Purchase extends ORM {
		
	protected $_belongs_to = array('order'=>array(),'product'=>array());
	 
}