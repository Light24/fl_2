<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-23 16:59:00 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [0function.mysql-connect0]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 16:59:00 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(42): Kohana_Database_Query->execute('default')
#3 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(362): Pages::init()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Core.php(511): require('Z:\home\test1.r...')
#5 [internal function]: Kohana_Core::auto_load('Pages')
#6 Z:\home\test1.ru\www\modules\pages\init.php(23): spl_autoload_call('Pages')
#7 [internal function]: {closure}(Object(Route), Array, Object(Request))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(462): call_user_func(Object(Closure), Object(Route), Array, Object(Request))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#11 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 16:59:01 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [0function.mysql-connect0]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 16:59:01 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(42): Kohana_Database_Query->execute('default')
#3 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(362): Pages::init()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Core.php(511): require('Z:\home\test1.r...')
#5 [internal function]: Kohana_Core::auto_load('Pages')
#6 Z:\home\test1.ru\www\modules\pages\init.php(23): spl_autoload_call('Pages')
#7 [internal function]: {closure}(Object(Route), Array, Object(Request))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(462): call_user_func(Object(Closure), Object(Route), Array, Object(Request))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#11 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 16:59:03 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [0function.mysql-connect0]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 16:59:03 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(42): Kohana_Database_Query->execute('default')
#3 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(362): Pages::init()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Core.php(511): require('Z:\home\test1.r...')
#5 [internal function]: Kohana_Core::auto_load('Pages')
#6 Z:\home\test1.ru\www\modules\pages\init.php(23): spl_autoload_call('Pages')
#7 [internal function]: {closure}(Object(Route), Array, Object(Request))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(462): call_user_func(Object(Closure), Object(Route), Array, Object(Request))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#11 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 16:59:04 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [0function.mysql-connect0]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 16:59:04 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(42): Kohana_Database_Query->execute('default')
#3 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(362): Pages::init()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Core.php(511): require('Z:\home\test1.r...')
#5 [internal function]: Kohana_Core::auto_load('Pages')
#6 Z:\home\test1.ru\www\modules\pages\init.php(23): spl_autoload_call('Pages')
#7 [internal function]: {closure}(Object(Route), Array, Object(Request))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(462): call_user_func(Object(Closure), Object(Route), Array, Object(Request))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#11 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 22:25:56 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [0function.mysql-connect0]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 22:25:56 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(42): Kohana_Database_Query->execute('default')
#3 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(362): Pages::init()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Core.php(511): require('Z:\home\test1.r...')
#5 [internal function]: Kohana_Core::auto_load('Pages')
#6 Z:\home\test1.ru\www\modules\pages\init.php(23): spl_autoload_call('Pages')
#7 [internal function]: {closure}(Object(Route), Array, Object(Request))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(462): call_user_func(Object(Closure), Object(Route), Array, Object(Request))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#11 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 22:25:57 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [0function.mysql-connect0]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-23 22:25:57 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(42): Kohana_Database_Query->execute('default')
#3 Z:\home\test1.ru\www\modules\pages\classes\Pages.php(362): Pages::init()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Core.php(511): require('Z:\home\test1.r...')
#5 [internal function]: Kohana_Core::auto_load('Pages')
#6 Z:\home\test1.ru\www\modules\pages\init.php(23): spl_autoload_call('Pages')
#7 [internal function]: {closure}(Object(Route), Array, Object(Request))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(462): call_user_func(Object(Closure), Object(Route), Array, Object(Request))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#11 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171