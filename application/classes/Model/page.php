<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM {

	// get pages
	public function get_pages()
	{	
		$pages_objs = ORM::factory('page')->find_all();
		$pages = array();
		foreach ($pages_objs as $i=>$page)
		{
			$pages[$page->id] = array('name'=>$page->name,'alias'=>$page->alias,'parent_id'=>$page->parent_id,'ru_name'=>$page->ru_name);
		}
				
		foreach ($pages as $i=>$p)
		{
			if ($p['parent_id']!=0)
			{
				$pages[$p['parent_id']]['items'][] = $p;
				unset($pages[$i]);
			}
		}
						
		return $pages;
	}
}