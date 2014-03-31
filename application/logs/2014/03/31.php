<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-31 08:45:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-31 08:45:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 08:53:45 --- CRITICAL: Kohana_Exception [ 0 ]: The orders property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 08:53:45 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('orders')
#1 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(19): Kohana_ORM->__get('orders')
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 08:57:04 --- CRITICAL: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Order class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 08:57:04 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('count')
#1 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(19): Kohana_ORM->__get('count')
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 08:58:10 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$count ~ APPPATH\views\admin\user\users_list.php [ 19 ] in C:\workspace\sites\mag\www\application\views\admin\user\users_list.php:19
2014-03-31 08:58:10 --- DEBUG: #0 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\workspace\si...', 19, Array)
#1 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#5 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#7 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\workspace\sites\mag\www\application\views\admin\user\users_list.php:19
2014-03-31 09:06:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: orders_sum ~ MODPATH\orm\classes\Model\Auth\User.php [ 32 ] in C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php:32
2014-03-31 09:06:45 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\workspace\si...', 32, Array)
#1 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(20): Model_Auth_User->orders_sum()
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php:32
2014-03-31 09:09:34 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 09:09:34 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('role')
#1 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(18): Kohana_ORM->__get('role')
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 09:09:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::role() ~ APPPATH\views\admin\user\users_list.php [ 18 ] in :
2014-03-31 09:09:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:11:08 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_Role class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 09:11:08 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('role')
#1 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(18): Kohana_ORM->__get('role')
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 09:16:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-31 09:16:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:17:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH\orm\classes\Model\Auth\User.php [ 28 ] in :
2014-03-31 09:17:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:18:24 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\orm\classes\Model\Auth\User.php [ 30 ] in C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php:30
2014-03-31 09:18:24 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php(30): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\workspace\si...', 30, Array)
#1 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(20): Model_Auth_User->orders_sum()
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php:30
2014-03-31 09:18:35 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\orm\classes\Model\Auth\User.php [ 30 ] in C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php:30
2014-03-31 09:18:35 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php(30): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\workspace\si...', 30, Array)
#1 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(20): Model_Auth_User->orders_sum()
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php:30
2014-03-31 09:28:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ MODPATH\orm\classes\Model\Auth\User.php [ 44 ] in C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php:44
2014-03-31 09:28:04 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\workspace\si...', 44, Array)
#1 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(18): Model_Auth_User->get_role()
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php:44
2014-03-31 09:28:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_roles' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-31 09:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:28:34 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'where clause' [ SELECT `cs_role`.`id` AS `id`, `cs_role`.`name` AS `name`, `cs_role`.`description` AS `description` FROM `cs_roles` AS `cs_role` WHERE `user_id` = '10' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 09:28:34 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cs_role...', false, Array)
#1 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php(44): Kohana_ORM::factory('Role', Array)
#6 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(18): Model_Auth_User->get_role()
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#8 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#9 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#12 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#14 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#17 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#20 {main} in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 09:28:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-31 09:28:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:29:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Roles_Users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-31 09:29:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:30:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Roles_Users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-31 09:30:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:33:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Role_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-31 09:33:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:33:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User_Role' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-31 09:33:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:34:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users_Role' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-31 09:34:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:34:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users_Roles' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-31 09:34:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:34:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User_Roles' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-31 09:34:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:38:00 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 09:38:00 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('role')
#1 C:\workspace\sites\mag\www\modules\orm\classes\Model\Auth\User.php(44): Kohana_ORM->__get('role')
#2 C:\workspace\sites\mag\www\application\views\admin\user\users_list.php(18): Model_Auth_User->get_role()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#5 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#8 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#16 {main} in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 09:38:33 --- CRITICAL: Database_Exception [ 1146 ]: Table 'compactshop4.cs_cs_roles_users' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `cs_cs_roles_users` WHERE `user_id` = '19' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 09:38:33 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\Auth\ORM.php(56): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\workspace\sites\mag\www\application\classes\Controller\admin\Base.php(11): Kohana_Auth_ORM->logged_in('admin')
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(69): Controller_Admin_Base->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 09:42:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\orm\classes\Model\Auth\User.php [ 45 ] in :
2014-03-31 09:42:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:45:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\admin\user\users_list.php [ 18 ] in :
2014-03-31 09:45:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:45:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\admin\user\users_list.php [ 18 ] in :
2014-03-31 09:45:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-31 09:52:53 --- CRITICAL: Kohana_Exception [ 0 ]: The contact property does not exist in the Model_Profile class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 09:52:53 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('contact')
#1 C:\workspace\sites\mag\www\application\views\admin\user\edit_user.php(14): Kohana_ORM->__get('contact')
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#4 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#7 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#15 {main} in C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php:600
2014-03-31 10:39:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: contacts ~ APPPATH\classes\Controller\admin\Users.php [ 33 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:33
2014-03-31 10:39:18 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\workspace\si...', 33, Array)
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:33
2014-03-31 10:40:57 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'user_id' [ INSERT INTO `cs_profile` (`age`, `name`, `contacts`) VALUES ('23', 'OtestU', 'skype') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 10:40:57 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `cs...', false, Array)
#1 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php(34): Kohana_ORM->save()
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 10:42:42 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update profile model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:34
2014-03-31 10:42:42 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php(34): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:34
2014-03-31 10:43:09 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update profile model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:34
2014-03-31 10:43:09 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php(34): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:34
2014-03-31 10:44:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update profile model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:35
2014-03-31 10:44:51 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php(35): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:35
2014-03-31 10:45:56 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update profile model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:34
2014-03-31 10:45:56 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php(34): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:34
2014-03-31 10:46:23 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update profile model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:34
2014-03-31 10:46:23 --- DEBUG: #0 C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php(34): Kohana_ORM->update()
#1 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php:34
2014-03-31 10:47:12 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'user_id' [ INSERT INTO `cs_profile` (`age`, `name`, `contacts`) VALUES ('23', 'UserTest', 'skype') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 10:47:12 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `cs...', false, Array)
#1 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php(34): Kohana_ORM->save()
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 10:51:05 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'user_id' [ INSERT INTO `cs_profile` (`age`, `name`, `contacts`) VALUES ('23', 'UserT', 'skype') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 10:51:05 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `cs...', false, Array)
#1 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php(45): Kohana_ORM->save()
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 10:51:32 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'user_id' [ INSERT INTO `cs_profile` (`age`, `name`, `contacts`) VALUES ('', 'asd', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 10:51:32 --- DEBUG: #0 C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `cs...', false, Array)
#1 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\workspace\sites\mag\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\workspace\sites\mag\www\application\classes\Controller\admin\Users.php(46): Kohana_ORM->save()
#4 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\workspace\sites\mag\www\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 12:38:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function send_headers() on a non-object ~ DOCROOT\index.php [ 119 ] in :
2014-03-31 12:38:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :