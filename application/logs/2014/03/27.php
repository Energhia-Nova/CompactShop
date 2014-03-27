<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-27 10:06:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function send_headers() on a non-object ~ DOCROOT\index.php [ 119 ] in :
2014-03-27 10:06:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-27 10:06:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function send_headers() on a non-object ~ DOCROOT\index.php [ 119 ] in :
2014-03-27 10:06:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-27 10:46:50 --- CRITICAL: Database_Exception [ 1146 ]: Table 'compactshop4.cs_menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `cs_menu_items` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php:358
2014-03-27 10:46:50 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#2 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\workspace\sites\mag\www\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#7 C:\workspace\sites\mag\www\index.php(102): require('C:\workspace\si...')
#8 {main} in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\MySQL.php:358
2014-03-27 11:03:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''Categories'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ SYSPATH\i18n\de.php [ 72 ] in :
2014-03-27 11:03:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-27 13:24:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-27 13:24:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-27 13:37:29 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update language model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:11
2014-03-27 13:37:29 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php(11): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Language->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Language))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:11
2014-03-27 13:37:56 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update language model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:37:56 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php(14): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Language->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Language))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:38:09 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update language model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:38:09 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php(14): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Language->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Language))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:38:25 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update language model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:38:25 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php(14): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Language->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Language))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:38:39 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update language model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:11
2014-03-27 13:38:39 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php(11): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Language->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Language))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:11
2014-03-27 13:41:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Language::update_all() ~ APPPATH\classes\Controller\admin\Language.php [ 11 ] in :
2014-03-27 13:41:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-27 13:43:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Language::save_all() ~ APPPATH\classes\Controller\admin\Language.php [ 11 ] in :
2014-03-27 13:43:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-27 13:44:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::set() ~ APPPATH\classes\Controller\admin\Language.php [ 11 ] in :
2014-03-27 13:44:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-27 13:45:14 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update language model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:45:14 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php(14): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Language->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Language))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:45:52 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update language model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:45:52 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php(14): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Language->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Language))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:46:15 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update language model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:46:15 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php(14): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Language->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Language))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:14
2014-03-27 13:50:13 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update language model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:24
2014-03-27 13:50:13 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php(24): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Language->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Language))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Language.php:24