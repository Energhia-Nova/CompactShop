<?php defined('SYSPATH') OR die('No direct access allowed.');

$settings = parse_ini_file("settings.ini",true);

return array
(
	'default' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 * array    variables    system variables as "key => value" pairs
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => $settings['database']['db_host'],
			'database'   => $settings['database']['db_name'],
			'username'   => $settings['database']['db_user'],
			'password'   => $settings['database']['db_pass'],
			'persistent' => FALSE,
		),
		'table_prefix' => $settings['database']['db_table_prefix'],
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
	'alternate' => array(
		'type'       => 'PDO',
		'connection' => array(
			/**
			 * The following options are available for PDO:
			 *
			 * string   dsn         Data Source Name
			 * string   username    database username
			 * string   password    database password
			 * boolean  persistent  use persistent connections?
			 */
			'dsn'        => 'mysql:host='.$settings['database']['db_host'].';dbname='.$settings['database']['db_name'],
			'username'   => $settings['database']['db_user'],
			'password'   => $settings['database']['db_pass'],
			'persistent' => FALSE,
		),
		/**
		 * The following extra options are available for PDO:
		 *
		 * string   identifier  set the escaping identifier
		 */
		'table_prefix' => $settings['database']['db_table_prefix'],
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
);