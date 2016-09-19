<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-14 08:34:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/CompactShop/system/classes/Kohana/View.php:145
2016-09-14 08:34:17 --- DEBUG: #0 /var/www/html/CompactShop/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/html/CompactShop/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/html/CompactShop/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#6 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/CompactShop/system/classes/Kohana/View.php:145
2016-09-14 08:35:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Controller/Base.php [ 8 ] in file:line
2016-09-14 08:35:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 08:48:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Controller/Base.php [ 8 ] in file:line
2016-09-14 08:48:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 09:03:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Controller/Base.php [ 8 ] in file:line
2016-09-14 09:03:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 09:06:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Controller/Base.php [ 8 ] in file:line
2016-09-14 09:06:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 09:07:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Controller/Base.php [ 8 ] in file:line
2016-09-14 09:07:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 09:07:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_product' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 09:07:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 10:23:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_product' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 10:23:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 10:24:46 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/html/CompactShop/modules/database/classes/Kohana/Database/MySQL.php:171
2016-09-14 10:24:46 --- DEBUG: #0 /var/www/html/CompactShop/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/CompactShop/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/CompactShop/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('products')
#3 /var/www/html/CompactShop/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/CompactShop/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/CompactShop/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/CompactShop/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/html/CompactShop/application/classes/Controller/Base.php(8): Kohana_ORM::factory('product')
#8 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(84): Controller_Base->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#11 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/CompactShop/modules/database/classes/Kohana/Database/MySQL.php:171
2016-09-14 10:29:41 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/html/CompactShop/modules/database/classes/Kohana/Database/MySQL.php:171
2016-09-14 10:29:41 --- DEBUG: #0 /var/www/html/CompactShop/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/CompactShop/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/CompactShop/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('products')
#3 /var/www/html/CompactShop/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/CompactShop/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/CompactShop/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/CompactShop/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/html/CompactShop/application/classes/Controller/Base.php(8): Kohana_ORM::factory('product')
#8 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(84): Controller_Base->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#11 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/CompactShop/modules/database/classes/Kohana/Database/MySQL.php:171
2016-09-14 10:45:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: products ~ APPPATH/classes/Controller/Base.php [ 10 ] in /var/www/html/CompactShop/application/classes/Controller/Base.php:10
2016-09-14 10:45:25 --- DEBUG: #0 /var/www/html/CompactShop/application/classes/Controller/Base.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/C...', 10, Array)
#1 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(84): Controller_Base->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/CompactShop/application/classes/Controller/Base.php:10
2016-09-14 10:45:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view products could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/CompactShop/system/classes/Kohana/View.php:145
2016-09-14 10:45:41 --- DEBUG: #0 /var/www/html/CompactShop/system/classes/Kohana/View.php(145): Kohana_View->set_filename('products')
#1 /var/www/html/CompactShop/system/classes/Kohana/View.php(30): Kohana_View->__construct('products', NULL)
#2 /var/www/html/CompactShop/application/classes/Controller/Base.php(15): Kohana_View::factory('products')
#3 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(84): Controller_Base->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#6 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/CompactShop/system/classes/Kohana/View.php:145
2016-09-14 10:47:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_products' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 10:47:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 10:53:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/CompactShop/system/classes/Kohana/View.php:145
2016-09-14 10:53:48 --- DEBUG: #0 /var/www/html/CompactShop/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /var/www/html/CompactShop/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/html/CompactShop/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#6 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/CompactShop/system/classes/Kohana/View.php:145
2016-09-14 11:04:02 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Base.php [ 12 ] in /var/www/html/CompactShop/application/classes/Controller/Base.php:12
2016-09-14 11:04:02 --- DEBUG: #0 /var/www/html/CompactShop/application/classes/Controller/Base.php(12): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/html/C...', 12, Array)
#1 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(84): Controller_Base->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/CompactShop/application/classes/Controller/Base.php:12
2016-09-14 11:04:27 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Base.php [ 12 ] in /var/www/html/CompactShop/application/classes/Controller/Base.php:12
2016-09-14 11:04:27 --- DEBUG: #0 /var/www/html/CompactShop/application/classes/Controller/Base.php(12): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/html/C...', 12, Array)
#1 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(84): Controller_Base->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/CompactShop/application/classes/Controller/Base.php:12
2016-09-14 11:07:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host compactshop. If you trust compactshop, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /var/www/html/CompactShop/application/views/product.php:3
2016-09-14 11:07:16 --- DEBUG: #0 /var/www/html/CompactShop/application/views/product.php(3): Kohana_URL::base(true)
#1 /var/www/html/CompactShop/system/classes/Kohana/View.php(62): include('/var/www/html/C...')
#2 /var/www/html/CompactShop/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/C...', Array)
#3 /var/www/html/CompactShop/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/CompactShop/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/html/CompactShop/application/classes/Controller/Base.php(12): Kohana_Response->body(Object(View))
#6 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(84): Controller_Base->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#9 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/CompactShop/application/views/product.php:3
2016-09-14 11:14:29 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host compactshop. If you trust compactshop, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /var/www/html/CompactShop/application/classes/Controller/Base.php:14
2016-09-14 11:14:29 --- DEBUG: #0 /var/www/html/CompactShop/application/classes/Controller/Base.php(14): Kohana_URL::base(true)
#1 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(84): Controller_Base->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/CompactShop/application/classes/Controller/Base.php:14
2016-09-14 11:15:11 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host compactshop. If you trust compactshop, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /var/www/html/CompactShop/application/classes/Controller/Base.php:14
2016-09-14 11:15:11 --- DEBUG: #0 /var/www/html/CompactShop/application/classes/Controller/Base.php(14): Kohana_URL::base(true)
#1 /var/www/html/CompactShop/system/classes/Kohana/Controller.php(84): Controller_Base->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/CompactShop/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 /var/www/html/CompactShop/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/CompactShop/system/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/CompactShop/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/CompactShop/application/classes/Controller/Base.php:14
2016-09-14 11:38:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 11:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 11:45:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 11:45:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 11:50:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 11:50:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 12:16:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 12:16:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 12:24:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 12:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 12:25:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 12:25:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 12:30:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 12:30:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 12:30:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 12:30:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 12:34:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 12:34:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 12:41:07 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 12:41:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 19:41:34 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'email' at 'MODPATH/email' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /var/www/html/CompactShop/application/bootstrap.php:130
2016-09-14 19:41:34 --- DEBUG: #0 /var/www/html/CompactShop/application/bootstrap.php(130): Kohana_Core::modules(Array)
#1 /var/www/html/CompactShop/index.php(102): require('/var/www/html/C...')
#2 {main} in /var/www/html/CompactShop/application/bootstrap.php:130
2016-09-14 19:43:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 19:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 19:50:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 19:50:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:02:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:02:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:02:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:02:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:08:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:20:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:20:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:28:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:28:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:28:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:28:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:32:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:32:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:41:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'menu' at 'MODPATH/menu' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /var/www/html/CompactShop/application/bootstrap.php:130
2016-09-14 20:41:32 --- DEBUG: #0 /var/www/html/CompactShop/application/bootstrap.php(130): Kohana_Core::modules(Array)
#1 /var/www/html/CompactShop/index.php(102): require('/var/www/html/C...')
#2 {main} in /var/www/html/CompactShop/application/bootstrap.php:130
2016-09-14 20:42:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'menu' at 'MODPATH/menu' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /var/www/html/CompactShop/application/bootstrap.php:130
2016-09-14 20:42:00 --- DEBUG: #0 /var/www/html/CompactShop/application/bootstrap.php(130): Kohana_Core::modules(Array)
#1 /var/www/html/CompactShop/index.php(102): require('/var/www/html/C...')
#2 {main} in /var/www/html/CompactShop/application/bootstrap.php:130
2016-09-14 20:42:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:42:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:47:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:47:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:53:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:53:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:54:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 20:55:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 20:55:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 21:08:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 21:08:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 21:14:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 21:14:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 21:17:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 21:17:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 21:17:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/bootstrap.php [ 182 ] in file:line
2016-09-14 21:17:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 21:19:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 21:19:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 21:34:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 21:34:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 21:43:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-09-14 21:43:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 21:47:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 48 ] in file:line
2016-09-14 21:47:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 21:47:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 48 ] in file:line
2016-09-14 21:47:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 21:50:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_menu_items' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 48 ] in file:line
2016-09-14 21:50:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 22:06:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 22:06:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 22:08:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 22:08:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 22:09:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 22:09:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 22:12:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 22:12:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 22:12:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 22:12:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 22:14:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 22:14:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-14 22:21:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on null ~ SYSPATH/classes/Kohana/Request/Client.php [ 119 ] in file:line
2016-09-14 22:21:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line