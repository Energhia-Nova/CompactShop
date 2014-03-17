<?php defined('SYSPATH') or die('No direct script access.');

class Model_Product extends ORM {

	protected $_belongs_to = array('category'=>array(),'brand'=>array(),'supplier'=>array());

}