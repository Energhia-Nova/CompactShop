<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Archive extends Controller_Base {
    // @Enter
    public function action_index()
	{
		$this->template->content = "<div id='form'><h2 style='padding: 10px'>Архив</h2><p style='padding-left: 10px;'>Страница не содержит данных и является просто тестовой.</p></div>";
    }
}