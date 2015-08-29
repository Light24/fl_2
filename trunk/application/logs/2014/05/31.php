<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-31 11:48:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'jurySelect' in 'field list' [ SELECT count(`jurySelect`) as juryCount FROM `contest`  WHERE `trigger`=1  ORDER BY dateStart DESC limit 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-05-31 11:48:04 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT count(`j...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(184): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-05-31 11:49:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works' in 'where clause' [ SELECT count(`jurySelect`) as juryCount FROM `contest_works`  WHERE `contest_works`= 8 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-05-31 11:49:25 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT count(`j...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(184): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-05-31 11:49:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works' in 'where clause' [ SELECT `jurySelect` as juryCount FROM `contest_works`  WHERE `contest_works`= 8 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2014-05-31 11:49:52 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `jurySel...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(184): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251