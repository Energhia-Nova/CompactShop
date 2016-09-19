<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-16 16:36:44 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Site/Base.php [ 43 ] in /var/www/html/compactshop/application/classes/Controller/Site/Base.php:43
2016-09-16 16:36:44 --- DEBUG: #0 /var/www/html/compactshop/application/classes/Controller/Site/Base.php(43): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/html/c...', 43, Array)
#1 /var/www/html/compactshop/system/classes/Kohana/Controller.php(72): Controller_Site_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/compactshop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#4 /var/www/html/compactshop/system/classes/Kohana/Request/Client.php(119): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/compactshop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/compactshop/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/compactshop/application/classes/Controller/Site/Base.php:43
2016-09-16 16:41:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/Controller/Site/Base.php [ 44 ] in file:line
2016-09-16 16:41:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 16:43:53 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'menu' at 'MODPATH/Menu' ~ SYSPATH/classes/Kohana/Core.php [ 594 ] in /var/www/html/compactshop/application/bootstrap.php:130
2016-09-16 16:43:53 --- DEBUG: #0 /var/www/html/compactshop/application/bootstrap.php(130): Kohana_Core::modules(Array)
#1 /var/www/html/compactshop/index.php(102): require('/var/www/html/c...')
#2 {main} in /var/www/html/compactshop/application/bootstrap.php:130
2016-09-16 16:44:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/Controller/Site/Base.php [ 44 ] in file:line
2016-09-16 16:44:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 16:44:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/Controller/Site/Base.php [ 44 ] in file:line
2016-09-16 16:44:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 16:44:48 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'Menu' at 'MODPATH/menu' ~ SYSPATH/classes/Kohana/Core.php [ 594 ] in /var/www/html/compactshop/application/bootstrap.php:130
2016-09-16 16:44:48 --- DEBUG: #0 /var/www/html/compactshop/application/bootstrap.php(130): Kohana_Core::modules(Array)
#1 /var/www/html/compactshop/index.php(102): require('/var/www/html/c...')
#2 {main} in /var/www/html/compactshop/application/bootstrap.php:130
2016-09-16 16:45:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/Controller/Site/Base.php [ 44 ] in file:line
2016-09-16 16:45:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 16:46:10 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'menu' at 'MODPATH/menu' ~ SYSPATH/classes/Kohana/Core.php [ 594 ] in /var/www/html/compactshop/application/bootstrap.php:130
2016-09-16 16:46:10 --- DEBUG: #0 /var/www/html/compactshop/application/bootstrap.php(130): Kohana_Core::modules(Array)
#1 /var/www/html/compactshop/index.php(102): require('/var/www/html/c...')
#2 {main} in /var/www/html/compactshop/application/bootstrap.php:130
2016-09-16 16:46:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/Controller/Site/Base.php [ 44 ] in file:line
2016-09-16 16:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 16:47:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Menu' not found ~ MODPATH/menu/classes/menu.php [ 3 ] in file:line
2016-09-16 16:47:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 16:49:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Menu' not found ~ MODPATH/menu/classes/Menu.php [ 3 ] in file:line
2016-09-16 16:49:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 16:50:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Menu' not found ~ MODPATH/menu/classes/Menu.php [ 3 ] in file:line
2016-09-16 16:50:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 16:50:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'menu' at 'MODPATH/menu' ~ SYSPATH/classes/Kohana/Core.php [ 594 ] in /var/www/html/compactshop/application/bootstrap.php:130
2016-09-16 16:50:58 --- DEBUG: #0 /var/www/html/compactshop/application/bootstrap.php(130): Kohana_Core::modules(Array)
#1 /var/www/html/compactshop/index.php(102): require('/var/www/html/c...')
#2 {main} in /var/www/html/compactshop/application/bootstrap.php:130
2016-09-16 16:51:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Menu' not found ~ MODPATH/Menu/classes/Menu.php [ 3 ] in file:line
2016-09-16 16:51:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 16:54:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Menu' not found ~ MODPATH/Menu/classes/Menu.php [ 3 ] in file:line
2016-09-16 16:54:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 16:54:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: view ~ MODPATH/Menu/classes/Kohana/Menu.php [ 22 ] in /var/www/html/compactshop/modules/Menu/classes/Kohana/Menu.php:22
2016-09-16 16:54:53 --- DEBUG: #0 /var/www/html/compactshop/modules/Menu/classes/Kohana/Menu.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/c...', 22, Array)
#1 /var/www/html/compactshop/modules/Menu/classes/Kohana/Menu.php(39): Kohana_Menu->__construct('menu/default')
#2 /var/www/html/compactshop/application/classes/Controller/Site/Base.php(44): Kohana_Menu::factory()
#3 /var/www/html/compactshop/system/classes/Kohana/Controller.php(72): Controller_Site_Base->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/compactshop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#6 /var/www/html/compactshop/system/classes/Kohana/Request/Client.php(119): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/compactshop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/compactshop/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/compactshop/modules/Menu/classes/Kohana/Menu.php:22
2016-09-16 16:56:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: view ~ MODPATH/Menu/classes/Kohana/Menu.php [ 22 ] in /var/www/html/compactshop/modules/Menu/classes/Kohana/Menu.php:22
2016-09-16 16:56:21 --- DEBUG: #0 /var/www/html/compactshop/modules/Menu/classes/Kohana/Menu.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/c...', 22, Array)
#1 /var/www/html/compactshop/modules/Menu/classes/Kohana/Menu.php(39): Kohana_Menu->__construct('menu/default')
#2 /var/www/html/compactshop/application/classes/Controller/Site/Base.php(44): Kohana_Menu::factory()
#3 /var/www/html/compactshop/system/classes/Kohana/Controller.php(72): Controller_Site_Base->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/compactshop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#6 /var/www/html/compactshop/system/classes/Kohana/Request/Client.php(119): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/compactshop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/compactshop/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/compactshop/modules/Menu/classes/Kohana/Menu.php:22
2016-09-16 17:01:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view site/menu could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/compactshop/system/classes/Kohana/View.php:145
2016-09-16 17:01:04 --- DEBUG: #0 /var/www/html/compactshop/system/classes/Kohana/View.php(145): Kohana_View->set_filename('site/menu')
#1 /var/www/html/compactshop/system/classes/Kohana/View.php(30): Kohana_View->__construct('site/menu', NULL)
#2 /var/www/html/compactshop/application/classes/Controller/Site/Base.php(40): Kohana_View::factory('site/menu')
#3 /var/www/html/compactshop/system/classes/Kohana/Controller.php(72): Controller_Site_Base->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/compactshop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#6 /var/www/html/compactshop/system/classes/Kohana/Request/Client.php(119): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/compactshop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/compactshop/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/compactshop/system/classes/Kohana/View.php:145
2016-09-16 17:03:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view menu could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/compactshop/system/classes/Kohana/View.php:145
2016-09-16 17:03:12 --- DEBUG: #0 /var/www/html/compactshop/system/classes/Kohana/View.php(145): Kohana_View->set_filename('menu')
#1 /var/www/html/compactshop/system/classes/Kohana/View.php(30): Kohana_View->__construct('menu', NULL)
#2 /var/www/html/compactshop/modules/Menu/classes/Kohana/Menu.php(22): Kohana_View::factory('menu')
#3 /var/www/html/compactshop/modules/Menu/classes/Kohana/Menu.php(39): Kohana_Menu->__construct('menu/default')
#4 /var/www/html/compactshop/application/classes/Controller/Site/Base.php(44): Kohana_Menu::factory()
#5 /var/www/html/compactshop/system/classes/Kohana/Controller.php(72): Controller_Site_Base->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/compactshop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#8 /var/www/html/compactshop/system/classes/Kohana/Request/Client.php(119): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/compactshop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/compactshop/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/compactshop/system/classes/Kohana/View.php:145
2016-09-16 17:04:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view site/menu could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/compactshop/system/classes/Kohana/View.php:145
2016-09-16 17:04:46 --- DEBUG: #0 /var/www/html/compactshop/system/classes/Kohana/View.php(145): Kohana_View->set_filename('site/menu')
#1 /var/www/html/compactshop/system/classes/Kohana/View.php(30): Kohana_View->__construct('site/menu', NULL)
#2 /var/www/html/compactshop/application/classes/Controller/Site/Base.php(40): Kohana_View::factory('site/menu')
#3 /var/www/html/compactshop/system/classes/Kohana/Controller.php(72): Controller_Site_Base->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/compactshop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#6 /var/www/html/compactshop/system/classes/Kohana/Request/Client.php(119): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/compactshop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/compactshop/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/compactshop/system/classes/Kohana/View.php:145
2016-09-16 17:06:37 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host compactshop. If you trust compactshop, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /var/www/html/compactshop/application/views/main.php:8
2016-09-16 17:06:37 --- DEBUG: #0 /var/www/html/compactshop/application/views/main.php(8): Kohana_URL::base(true)
#1 /var/www/html/compactshop/system/classes/Kohana/View.php(62): include('/var/www/html/c...')
#2 /var/www/html/compactshop/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/c...', Array)
#3 /var/www/html/compactshop/system/classes/Kohana/Controller/Template.php(45): Kohana_View->render()
#4 /var/www/html/compactshop/system/classes/Kohana/Controller.php(90): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/compactshop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#7 /var/www/html/compactshop/system/classes/Kohana/Request/Client.php(119): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/compactshop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/compactshop/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/compactshop/application/views/main.php:8
2016-09-16 17:10:12 --- EMERGENCY: ErrorException [ 2 ]: parse_ini_file(settings.ini): failed to open stream: No such file or directory ~ APPPATH/config/database.php [ 3 ] in file:line
2016-09-16 17:10:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'parse_ini_file(...', '/var/www/html/c...', 3, Array)
#1 /var/www/html/compactshop/application/config/database.php(3): parse_ini_file('settings.ini', true)
#2 /var/www/html/compactshop/system/classes/Kohana/Core.php(856): include('/var/www/html/c...')
#3 /var/www/html/compactshop/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/var/www/html/c...')
#4 /var/www/html/compactshop/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#5 /var/www/html/compactshop/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#6 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#7 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#8 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#9 /var/www/html/compactshop/application/bootstrap.php(181): Kohana_ORM::factory('menu_item')
#10 /var/www/html/compactshop/index.php(102): require('/var/www/html/c...')
#11 {main} in file:line
2016-09-16 17:11:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2016-09-16 17:11:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:24:35 --- EMERGENCY: ErrorException [ 2 ]: parse_ini_file(settings.ini): failed to open stream: No such file or directory ~ APPPATH/config/database.php [ 3 ] in file:line
2016-09-16 17:24:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'parse_ini_file(...', '/var/www/html/c...', 3, Array)
#1 /var/www/html/compactshop/application/config/database.php(3): parse_ini_file('settings.ini', true)
#2 /var/www/html/compactshop/system/classes/Kohana/Core.php(856): include('/var/www/html/c...')
#3 /var/www/html/compactshop/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/var/www/html/c...')
#4 /var/www/html/compactshop/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#5 /var/www/html/compactshop/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#6 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#7 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#8 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#9 /var/www/html/compactshop/application/bootstrap.php(181): Kohana_ORM::factory('menu_item')
#10 /var/www/html/compactshop/index.php(102): require('/var/www/html/c...')
#11 {main} in file:line
2016-09-16 17:25:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Site/Base.php [ 21 ] in file:line
2016-09-16 17:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:25:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Site/Base.php [ 21 ] in file:line
2016-09-16 17:25:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:26:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Site/Base.php [ 21 ] in file:line
2016-09-16 17:26:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:28:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Site/Base.php [ 21 ] in file:line
2016-09-16 17:28:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:29:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Site/Base.php [ 21 ] in file:line
2016-09-16 17:29:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:29:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Site/Base.php [ 21 ] in file:line
2016-09-16 17:29:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:30:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Site/Base.php [ 21 ] in file:line
2016-09-16 17:30:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:30:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Site/Base.php [ 21 ] in file:line
2016-09-16 17:30:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:30:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: session_type ~ MODPATH/auth/classes/Kohana/Auth.php [ 58 ] in /var/www/html/compactshop/modules/auth/classes/Kohana/Auth.php:58
2016-09-16 17:30:41 --- DEBUG: #0 /var/www/html/compactshop/modules/auth/classes/Kohana/Auth.php(58): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/c...', 58, Array)
#1 /var/www/html/compactshop/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#2 /var/www/html/compactshop/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#3 /var/www/html/compactshop/application/classes/Controller/Site/Base.php(21): Kohana_Auth::instance()
#4 /var/www/html/compactshop/system/classes/Kohana/Controller.php(72): Controller_Site_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/compactshop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#7 /var/www/html/compactshop/system/classes/Kohana/Request/Client.php(119): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/compactshop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/compactshop/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/compactshop/modules/auth/classes/Kohana/Auth.php:58
2016-09-16 17:32:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2016-09-16 17:32:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:38:30 --- EMERGENCY: ErrorException [ 2 ]: parse_ini_file(settings.ini): failed to open stream: No such file or directory ~ APPPATH/config/database.php [ 3 ] in file:line
2016-09-16 17:38:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'parse_ini_file(...', '/var/www/html/c...', 3, Array)
#1 /var/www/html/compactshop/application/config/database.php(3): parse_ini_file('settings.ini', true)
#2 /var/www/html/compactshop/system/classes/Kohana/Core.php(856): include('/var/www/html/c...')
#3 /var/www/html/compactshop/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/var/www/html/c...')
#4 /var/www/html/compactshop/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#5 /var/www/html/compactshop/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#6 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#7 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#8 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#9 /var/www/html/compactshop/application/bootstrap.php(181): Kohana_ORM::factory('menu_item')
#10 /var/www/html/compactshop/index.php(102): require('/var/www/html/c...')
#11 {main} in file:line
2016-09-16 17:43:12 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'compactshop' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /var/www/html/compactshop/modules/database/classes/Kohana/Database/MySQL.php:75
2016-09-16 17:43:12 --- DEBUG: #0 /var/www/html/compactshop/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('compactshop')
#1 /var/www/html/compactshop/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /var/www/html/compactshop/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('menu_items')
#4 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/html/compactshop/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/html/compactshop/application/bootstrap.php(181): Kohana_ORM::factory('menu_item')
#9 /var/www/html/compactshop/index.php(102): require('/var/www/html/c...')
#10 {main} in /var/www/html/compactshop/modules/database/classes/Kohana/Database/MySQL.php:75
2016-09-16 17:43:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2016-09-16 17:43:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 17:45:30 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host compactshop. If you trust compactshop, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /var/www/html/compactshop/application/views/main.php:8
2016-09-16 17:45:30 --- DEBUG: #0 /var/www/html/compactshop/application/views/main.php(8): Kohana_URL::base(true)
#1 /var/www/html/compactshop/system/classes/Kohana/View.php(62): include('/var/www/html/c...')
#2 /var/www/html/compactshop/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/c...', Array)
#3 /var/www/html/compactshop/system/classes/Kohana/Controller/Template.php(45): Kohana_View->render()
#4 /var/www/html/compactshop/system/classes/Kohana/Controller.php(90): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/compactshop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Home))
#7 /var/www/html/compactshop/system/classes/Kohana/Request/Client.php(119): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/compactshop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/compactshop/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/compactshop/application/views/main.php:8
2016-09-16 17:59:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 125 ] in file:line
2016-09-16 17:59:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-16 18:37:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 963 ] in /var/www/html/compactshop/system/classes/Kohana/Request.php:963
2016-09-16 18:37:02 --- DEBUG: #0 /var/www/html/compactshop/system/classes/Kohana/Request.php(963): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/c...', 963, Array)
#1 /var/www/html/compactshop/index.php(118): Kohana_Request->execute()
#2 {main} in /var/www/html/compactshop/system/classes/Kohana/Request.php:963