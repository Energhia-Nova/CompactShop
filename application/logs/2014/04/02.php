<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-02 12:26:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-04-02 12:26:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-04-02 12:34:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: supplier ~ APPPATH\views\admin\product\products_list.php [ 24 ] in C:\workspace\sites\mag\www\application\views\admin\product\products_list.php:24
2014-04-02 12:34:29 --- DEBUG: #0 C:\workspace\sites\mag\www\application\views\admin\product\products_list.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\workspace\si...', 24, Array)
#1 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#5 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#7 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\workspace\sites\mag\www\application\views\admin\product\products_list.php:24
2014-04-02 12:36:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: order ~ APPPATH\views\admin\product\products_list.php [ 24 ] in C:\workspace\sites\mag\www\application\views\admin\product\products_list.php:24
2014-04-02 12:36:23 --- DEBUG: #0 C:\workspace\sites\mag\www\application\views\admin\product\products_list.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\workspace\si...', 24, Array)
#1 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#2 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#3 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\workspace\sites\mag\www\application\views\admin\panel\panel.php(63): Kohana_View->__toString()
#5 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(61): include('C:\workspace\si...')
#6 C:\workspace\sites\mag\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\workspace\si...', Array)
#7 C:\workspace\sites\mag\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\workspace\sites\mag\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#11 C:\workspace\sites\mag\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\workspace\sites\mag\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\workspace\sites\mag\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\workspace\sites\mag\www\application\views\admin\product\products_list.php:24
2014-04-02 12:39:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function send_headers() on a non-object ~ DOCROOT\index.php [ 119 ] in :
2014-04-02 12:39:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-04-02 12:50:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function send_headers() on a non-object ~ DOCROOT\index.php [ 119 ] in :
2014-04-02 12:50:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :