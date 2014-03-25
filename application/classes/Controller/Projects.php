<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Projects extends Controller_Base {
    // Contact
    public function action_index()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Projekte</h2><p style='padding-left: 10px;'>Seite enthält keine Daten und ist nur ein Test.</p></div>";
    }
	
	public function action_artwork()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Projekte [Art.]</h2><p style='padding-left: 10px;'>Seite enthält keine Daten und ist nur ein Test.</p></div>";
	}
	
	public function action_magazin()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Projekte [Geschäft]</h2><p style='padding-left: 10px;'>Seite enthält keine Daten und ist nur ein Test.</p></div>";
	}
}