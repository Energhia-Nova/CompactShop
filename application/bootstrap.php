<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Berlin');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
 
/* DEVELOPMENT MODE */
Kohana::$environment = Kohana::DEVELOPMENT;
// Kohana::$environment = Kohana::PRODUCTION;
 
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
    'index_file' => FALSE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

Cookie::$salt = '7891oduaeubtp';

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	   'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	   'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	   'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	'userguide'  => MODPATH.'userguide',  // User guide and API documentation
       'menu'       => MODPATH.'menu',       // Menu
	   'email'		=> MODPATH.'email', // Email
	   'pagination' => MODPATH.'pagination', // Pagination
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
 
Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]++', 'message' => '.+'))
        ->defaults(array(
                'controller' => 'error',
));

Route::set('lang','admin/language/<lang>')
	->defaults(array(
		'directory'=>'admin',
		'controller'=>'language',
		'action' => 'index'
	));
 
// admin order edition
Route::set('ordedit','admin/order/edit/<id>')
	->defaults(array(
		'directory'=>'admin',
		'controller'=>'orders',
		'action'=>'edit',
	));
	
// admin order remove
Route::set('orderem','admin/order/remove/<id>')
	->defaults(array(
		'directory'=>'admin',
		'controller'=>'orders',
		'action'=>'remove',
	));

// CodeBench Profiling Enable/Disable 
// Kohana::$profiling = TRUE;
 
Route::set('admin','admin(/<controller>(/<action>(/<id>)))')
    ->filter(function($route, $params, $request) {
        // Replacing the hyphens for underscores.
        $params['action'] = str_replace('-', '_', $params['action']);
        return $params; // Returning an array will replace the parameters.
    })
    ->defaults(array(
        'directory'=>'admin',
        'controller'=>'panel',
        'action'=>'index',
    ));

	
$menu_items = ORM::factory('menu_item')->find_all();
$item_urls = array();
foreach ($menu_items as $mi) $item_urls[] = $mi->url;
	
Route::set('products','<category>(/page/<page>)',array('category'=>implode('|',$item_urls)))
    ->defaults(array(
		'directory'  => 'site',
        'controller' => 'products',
        'action' => 'index',
    ));

Route::set('product','<categories>/show/<id>',
	array(
		'categories'=>'[^.,;?\n]+',
		'id'=>'\d+',
	))
	->defaults(array(
			'directory' => 'site',
			'controller'=>'products',
			'action'=>'show',
	));
	
Route::set('adminajax','admin/ajax.php')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'ajax',
        'action' => 'index',
    ));
		
Route::set('signup','sign-up')
	->defaults(array(
		'directory' => 'site',
		'controller'=>'signup',
		'action'=>'index',
	));
	
Route::set('signconfirm','sign-up/confirm/<link>')
	->defaults(array(
		'directory'=>'site',
		'controller'=>'signup',
		'action'=>'confirm',
	));
	 
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory'  => 'site',
		'controller' => 'home',
		'action'     => 'index',
	));
