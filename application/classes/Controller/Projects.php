<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Projects extends Controller_Base {
    // Contact
    public function action_index()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Projects</h2><p style='padding-left: 10px;'>Page is not contains any data and formed just for Test Review.</p></div>";
    }
	
	public function action_artwork()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Projects [Art.]</h2><p style='padding-left: 10px;'>Page is not contains any data and formed just for Test Review.</p></div>";
	}
	
	public function action_magazin()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Projects [Store]</h2><p style='padding-left: 10px;'>Page is not contains any data and formed just for Test Review.</p></div>";
	}
}