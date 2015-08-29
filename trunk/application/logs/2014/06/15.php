<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-15 11:02:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'middleName' in 'field list' [ UPDATE `users` SET `first_name` = 'Тпоа', `last_name` = NULL, `middleName` = 'Патпа', `uid_pc` = 'e951fffa268f9b07dad49b9ee5ab4914', `password` = '96e79218965eb72c92a549dd5a330112', `approved` = 1 WHERE `id` = '24650' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-06-15 11:02:12 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(1510): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_registrationCrm()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-06-15 11:02:29 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'middleName' in 'field list' [ UPDATE `users` SET `first_name` = 'Тпоа', `last_name` = NULL, `middleName` = 'Патпа', `uid_pc` = 'e951fffa268f9b07dad49b9ee5ab4914', `password` = '96e79218965eb72c92a549dd5a330112', `approved` = 1 WHERE `id` = '24650' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-06-15 11:02:29 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(1510): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_registrationCrm()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-06-15 11:02:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'middleName' in 'field list' [ UPDATE `users` SET `first_name` = 'Тпоа', `last_name` = NULL, `middleName` = 'Патпа', `uid_pc` = 'e951fffa268f9b07dad49b9ee5ab4914', `password` = '96e79218965eb72c92a549dd5a330112', `approved` = 1 WHERE `id` = '24650' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-06-15 11:02:51 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(1510): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_registrationCrm()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-06-15 11:05:03 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'middleName' in 'field list' [ UPDATE `users` SET `first_name` = 'Тпоа', `last_name` = NULL, `middleName` = 'Патпа', `uid_pc` = 'e951fffa268f9b07dad49b9ee5ab4914', `password` = '96e79218965eb72c92a549dd5a330112', `approved` = 1 WHERE `id` = '24650' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-06-15 11:05:03 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(1510): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_registrationCrm()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251