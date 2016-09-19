<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Archive extends Controller_Site_Base {
    
    public function action_index()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Archive</h2><p style='padding-left: 10px;'>Page is not contains any data and formed just for Test Review.</p></div>";
    }
}