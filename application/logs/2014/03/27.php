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