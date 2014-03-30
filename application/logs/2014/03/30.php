<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-30 12:30:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'option' in 'where clause' [ SELECT `cs_option`.`id` AS `id`, `cs_option`.`name` AS `name`, `cs_option`.`alias` AS `alias`, `cs_option`.`value` AS `value` FROM `cs_options` AS `cs_option` WHERE `option` = 'Store Name' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-30 12:30:47 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cs_opti...', false, Array)
#1 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 C:\workspace\sites\mag\www\application\classes\Controller\site\Base.php(39): Kohana_ORM::factory('option', Array)
#6 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(69): Controller_Site_Base->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-30 12:34:34 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Option as array ~ APPPATH\classes\Controller\site\Base.php [ 42 ] in :
2014-03-30 12:34:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-30 12:34:47 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\site\Base.php [ 40 ] in C:\workspace\sites\mag\www\application\classes\Controller\site\Base.php:40
2014-03-30 12:34:47 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\site\Base.php(40): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\workspace\si...', 40, Array)
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(69): Controller_Site_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\site\Base.php:40
2014-03-30 12:47:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\site\menu.php [ 2 ] in C:\workspace\sites\mag\www\application\views\site\menu.php:2
2014-03-30 12:47:32 --- DEBUG: #0 C:\workspace\sites\mag\www\application\views\site\menu.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\workspace\si...', 2, Array)
#1 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\workspace\sites\mag\www\application\views\main.php(18): Kohana_View->__toString()
#5 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#7 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\workspace\sites\mag\www\application\views\site\menu.php:2
2014-03-30 12:58:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function send_headers() on a non-object ~ DOCROOT\index.php [ 119 ] in :
2014-03-30 12:58:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :