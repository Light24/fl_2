<?php
defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------
// Load the core Kohana class
require SYSPATH . 'classes/Kohana/Core' . EXT;

if (is_file(APPPATH . 'classes/Kohana' . EXT)) {
    // Application extends the core
    require APPPATH . 'classes/Kohana' . EXT;
} else {
    // Load empty core extension
    require SYSPATH . 'classes/Kohana' . EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Moscow');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'ru_RU.utf-8');

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
I18n::lang('ru-ru');

/**
 * Set cookie salt
 */
Cookie::$salt = 'contest fix price';

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
Kohana::$environment = ($_SERVER['SERVER_NAME'] !== 'contest.cardlab.server.loc') ? Kohana::PRODUCTION : Kohana::DEVELOPMENT;
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
    'base_url' => '/',
    'index_file' => false,
    'errors' => true
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH . 'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
    'control_center' => MODPATH . 'control_center', // админка
    'elfinder' => MODPATH . 'elfinder', // Polls module
    'users' => MODPATH . 'users', // Users module
    //   'polls' => MODPATH . 'polls', // Polls module
    'menus' => MODPATH . 'menus', // Menus module
    'pages' => MODPATH . 'pages', // CMS
    'contest' => MODPATH . 'contest',
    
        
    'settings' => MODPATH . 'settings',
    'captcha' => MODPATH . 'captcha', // Captcha
    'pagination'=>MODPATH . 'pagination', // Captcha
    'database' => MODPATH . 'database', // Database access
    'auth' => MODPATH . 'auth', // Basic authentication
    // 'cache'      => MODPATH.'cache',      // Caching with multiple backends
    // 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
    'database' => MODPATH . 'database', // Database access
    'image'      => MODPATH.'image',      // Image manipulation
    // 'minion'     => MODPATH.'minion',     // CLI Tasks
    'orm' => MODPATH . 'orm', // Object Relationship Mapping
    'email' => MODPATH . 'email',
    'jslogin' => MODPATH . 'jslogin',
    'account' => MODPATH . 'account',
    'question' => MODPATH . 'question',
        // 'unittest'   => MODPATH.'unittest',   // Unit testing
        // 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */


// Вопросы
Route::set('question_ask', 'question/ask')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'ask',
      )
);

Route::set('question_best', 'question/best')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'question_best',
      )
);

Route::set('question_cats', '(question/<duration_cat>(/<catID>))', array('duration_cat' => '[a-zA-Z]+'), array('catID' => '[0-9]+'))
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'get_questions',
      )
);

// авторизация через vk api
Route::set('social_auth', 'social_auth.php')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'social_auth',
      )
);

// Пользователи
Route::set('user_get_by_id', 'user/<userID>', array('userID' => '[0-9]+'))
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_id',
      ));

Route::set('user_questions_by_cats', 'user/question/cats/<userID>(/<catID>)', array('userID' => '[0-9]+'), array('catID' => '[0-9]+'))
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_id',
      ));


Route::set('user_profile', 'user(/profile)')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_profile',
      ));

Route::set('user_profile_setting', 'user/setting')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_setting',
      ));

Route::set('user_profile_setting_photos', 'user/photos(/<uid>)', array('uid' => '[0-9]+'))
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_photos',
      ));

Route::set('user_leaders', 'user/leaders(/<sort_type>(/<duration_type>(/<catID>)))')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_leaders'
      ));

Route::set('user_registration', 'user/registration')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_registration'
      ));

Route::set('user_registration_success', 'user/registration/success')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_registration_success'
      ));

Route::set('user_messages', 'user/profile/messages')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_messages'
      ));

Route::set('user_message_reply', 'user/profile/reply')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_message_reply'
      ));

Route::set('user_logout', 'user/profile/logout')
    ->defaults(array(
        'controller' => 'manager',
        'action'     => 'user_logout'
      ));


// Статические страницы
Route::set('manager_static_page', '<page>(/<print>)',  array('page' => '[a-zA-Z0-9]+'), array('print' => 'print'))
    ->defaults(array(
        'controller' => 'manager',
        'action' => 'show_static_page',
    )
);
