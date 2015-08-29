<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-28 17:49:18 --- CRITICAL: Database_Exception [ 1146 ]: Table 'contest.background' doesn't exist [ SELECT `background` as bg FROM `background` limit 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 17:49:18 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `backgro...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\settings\views\settings_control\main.php(54): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\konkurs\modules\settings\classes\Controller\SettingsControl.php(25): Kohana_View->render()
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_SettingsControl->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SettingsControl))
#8 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251