<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-28 13:18:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::get() ~ APPPATH\views\products\products.php [ 6 ] in :
2014-03-28 13:18:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-28 13:19:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::get_global() ~ APPPATH\views\products\products.php [ 6 ] in :
2014-03-28 13:19:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-28 13:20:29 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: View::$currency ~ APPPATH\views\products\products.php [ 6 ] in :
2014-03-28 13:20:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-28 13:20:55 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_View::bind() should not be called statically ~ APPPATH\views\products\products.php [ 6 ] in C:\workspace\sites\mag\www\application\views\products\products.php:6
2014-03-28 13:20:55 --- DEBUG: #0 C:\workspace\sites\mag\www\application\views\products\products.php(6): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\workspace\si...', 6, Array)
#1 C:\workspace\sites\mag\www\application\views\products\products.php(6): Kohana_View::bind()
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\workspace\sites\mag\www\application\views\main.php(50): Kohana_View->__toString()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\workspace\sites\mag\www\application\views\products\products.php:6
2014-03-28 13:29:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function send_headers() on a non-object ~ DOCROOT\index.php [ 119 ] in :
2014-03-28 13:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-28 13:33:16 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'compactshop4' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-28 13:33:16 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('compactshop4')
#1 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#4 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\workspace\sites\mag\www\application\bootstrap.php(181): Kohana_ORM::factory('menu_item')
#9 C:\workspace\sites\mag\www\index.php(102): require('C:\workspace\si...')
#10 {main} in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-28 13:33:19 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'compactshop4' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php:75
2014-03-28 13:33:19 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('compactshop4')
#1 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#4 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\workspace\sites\mag\www\application\bootstrap.php(181): Kohana_ORM::factory('menu_item')
#9 C:\workspace\sites\mag\www\index.php(102): require('C:\workspace\si...')
#10 {main} in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php:75