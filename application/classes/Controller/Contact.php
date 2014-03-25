<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Base {
    // Contact
    public function action_index()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Контакт</h2><p style='padding-left: 10px;'>Seite enthält keine Daten und ist nur ein Test.</p></div>";
    }
}