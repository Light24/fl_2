<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-04 12:08:17 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%Barisa' at line 3 [ SELECT *, 
           CONCAT_WS(" ",`first_name`,`last_name`,`middle_name`) as fio 
           FROM `users` WHERE `first_name` LIKE %Barisa  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-08-04 12:08:17 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, ?    ...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\users\classes\Users.php(48): Kohana_Database_Query->execute('default')
#2 C:\OpenServer\domains\konkurs\modules\users\classes\Controller\UsersControl.php(34): Users::getUsersList()
#3 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_UsersControl->action_ajax_users_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_UsersControl))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-08-04 12:08:30 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%Barisa' at line 3 [ SELECT *, 
           CONCAT_WS(" ",`first_name`,`last_name`,`middle_name`) as fio 
           FROM `users` WHERE `first_name` LIKE %Barisa  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-08-04 12:08:30 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, ?    ...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\users\classes\Users.php(48): Kohana_Database_Query->execute('default')
#2 C:\OpenServer\domains\konkurs\modules\users\classes\Controller\UsersControl.php(34): Users::getUsersList()
#3 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_UsersControl->action_ajax_users_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_UsersControl))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-08-04 12:08:51 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%Barisa' at line 3 [ SELECT *, 
           CONCAT_WS(" ",`first_name`,`last_name`,`middle_name`) as fio 
           FROM `users` WHERE `first_name` LIKE %Barisa  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-08-04 12:08:51 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, ?    ...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\users\classes\Users.php(48): Kohana_Database_Query->execute('default')
#2 C:\OpenServer\domains\konkurs\modules\users\classes\Controller\UsersControl.php(34): Users::getUsersList()
#3 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_UsersControl->action_ajax_users_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_UsersControl))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-08-04 12:09:18 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%Корюкина' at line 3 [ SELECT *, 
           CONCAT_WS(" ",`first_name`,`last_name`,`middle_name`) as fio 
           FROM `users` WHERE `first_name` LIKE %Корюкина  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-08-04 12:09:18 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, ?    ...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\users\classes\Users.php(48): Kohana_Database_Query->execute('default')
#2 C:\OpenServer\domains\konkurs\modules\users\classes\Controller\UsersControl.php(34): Users::getUsersList()
#3 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_UsersControl->action_ajax_users_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_UsersControl))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251