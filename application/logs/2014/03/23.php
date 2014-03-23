<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-23 12:31:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_menu_item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2014-03-23 12:31:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-23 12:34:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-23 12:34:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-23 12:34:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-23 12:34:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-23 12:34:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-23 12:34:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-23 14:15:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-23 14:15:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-23 14:20:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'compactshop4.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:358
2014-03-23 14:20:15 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#7 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#8 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:358
2014-03-23 14:21:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-23 14:21:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-23 14:35:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-23 14:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-23 15:00:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: database ~ APPPATH\config\database.php [ 23 ] in C:\workspace\sites\dev\www\CompactShop\application\config\database.php:23
2014-03-23 15:00:37 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\application\config\database.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\workspace\si...', 23, Array)
#1 C:\workspace\sites\dev\www\CompactShop\system\classes\Kohana\Core.php(829): include('C:\workspace\si...')
#2 C:\workspace\sites\dev\www\CompactShop\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('C:\workspace\si...')
#3 C:\workspace\sites\dev\www\CompactShop\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(317): Kohana_Database::instance(NULL)
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#9 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#10 {main} in C:\workspace\sites\dev\www\CompactShop\application\config\database.php:23
2014-03-23 15:01:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: database ~ APPPATH\config\database.php [ 25 ] in C:\workspace\sites\dev\www\CompactShop\application\config\database.php:25
2014-03-23 15:01:15 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\application\config\database.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\workspace\si...', 25, Array)
#1 C:\workspace\sites\dev\www\CompactShop\system\classes\Kohana\Core.php(829): include('C:\workspace\si...')
#2 C:\workspace\sites\dev\www\CompactShop\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('C:\workspace\si...')
#3 C:\workspace\sites\dev\www\CompactShop\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(317): Kohana_Database::instance(NULL)
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#9 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#10 {main} in C:\workspace\sites\dev\www\CompactShop\application\config\database.php:25
2014-03-23 15:02:23 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:02:23 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:03:22 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:03:22 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:06:52 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:06:52 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:07:46 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:07:46 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:13:08 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:13:08 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:13:38 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:13:38 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:15:05 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:15:05 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:21:26 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:21:26 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-23 15:22:37 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 69 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:173
2014-03-23 15:22:37 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(173): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:173
2014-03-23 15:23:30 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 70 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:174
2014-03-23 15:23:30 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(174): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(361): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:174
2014-03-23 15:23:49 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 70 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:174
2014-03-23 15:23:49 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(174): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(361): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:174
2014-03-23 15:24:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hostname ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 28 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:28
2014-03-23 15:24:32 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\workspace\si...', 28, Array)
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(174): Kohana_Database_MySQL->connect()
#2 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(361): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#9 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#10 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:28
2014-03-23 15:25:01 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 69 ] in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:173
2014-03-23 15:25:01 --- DEBUG: #0 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(173): Kohana_Database_MySQL->connect()
#1 C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('menu_items')
#3 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\workspace\sites\dev\www\CompactShop\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\workspace\sites\dev\www\CompactShop\application\bootstrap.php(174): Kohana_ORM::factory('menu_item')
#8 C:\workspace\sites\dev\www\CompactShop\index.php(102): require('C:\workspace\si...')
#9 {main} in C:\workspace\sites\dev\www\CompactShop\modules\database\classes\Kohana\Database\MySQL.php:173
2014-03-23 15:27:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-23 15:27:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-23 15:30:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-23 15:30:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-23 15:30:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-23 15:30:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-23 15:36:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in :
2014-03-23 15:36:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :