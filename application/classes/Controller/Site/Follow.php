<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Follow extends Controller_Site_Base {
		
    public function action_index()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Nets</h2><p style='padding-left: 10px;'>Page is not contains any data and formed just for Test Review.</p></div>";
    }
	
	public function action_twitter()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Nets [twitter]</h2><p style='padding-left: 10px;'>Page is not contains any data and formed just for Test Review.</p></div>";
	}
		
	public function action_facebook()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Nets [Facebook]</h2><p style='padding-left: 10px;'>Page is not contains any data and formed just for Test Review.</p></div>";
	}
	
	public function action_behance()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Nets  [Behans]</h2><p style='padding-left: 10px;'>Page is not contains any data and formed just for Test Review.</p></div>";
	}
		
}