<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Follow extends Controller_Base {
		
    // Follow
    public function action_index()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Netz</h2><p style='padding-left: 10px;'>Seite enthält keine Daten und ist nur ein Test.</p></div>";
    }
	
	public function action_twitter()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Netz [twitter]</h2><p style='padding-left: 10px;'>Seite enthält keine Daten und ist nur ein Test.</p></div>";
	}
		
	public function action_facebook()
	{
		$html = "<div id='form' style='width:680px'><h2 style='padding: 10px'>Netz  [Facebook]</h2><p style='padding-left: 10px;'>Seite enthält keine Daten und ist nur ein Test.</p></div>";
		
		$this->template->content = $html;
	}
	
	public function action_behance()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Netz  [Bechans]</h2><p style='padding-left: 10px;'>Seite enthält keine Daten und ist nur ein Test.</p></div>";
	}
		
}