<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Project extends Controller_Base {
    // Projects
    public function action_index()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Проэкты</h2><p style='padding-left: 10px;'>Страница не содержит данных и является просто тестовой.</p></div>";
    }
	
	public function action_artwork()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Проэкты [Арт]</h2><p style='padding-left: 10px;'>Страница не содержит данных и является просто тестовой.</p></div>";
	}
	
	public function action_magazin()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Проэкты [Магазин]</h2><p style='padding-left: 10px;'>Страница не содержит данных и является просто тестовой.</p></div>";
	}
}