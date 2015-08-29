<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-08 14:36:46 --- CRITICAL: Exception [ 0 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'buyers' at line 1 ~ MODPATH\cabinet\vendor\FXApi\FXAPIClient.php [ 34 ] in C:\OpenServer\domains\miska\modules\cabinet\vendor\FXApi\FXAPIConnection.php:46
2013-11-08 14:36:46 --- DEBUG: #0 C:\OpenServer\domains\miska\modules\cabinet\vendor\FXApi\FXAPIConnection.php(46): FXAPIClient->call('crm.cabinet.upd...', Object(stdClass))
#1 C:\OpenServer\domains\miska\application\classes\Controller\Common.php(545): FXAPIConnection->call('crm.cabinet.upd...', Object(stdClass))
#2 C:\OpenServer\domains\miska\modules\cabinet\classes\Controller\Miska.php(315): Controller_Common->crmUpdateBuyerInfo('+1(111) 111-111...')
#3 C:\OpenServer\domains\miska\system\classes\Kohana\Controller.php(84): Controller_Miska->action_changePhone()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\miska\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Miska))
#6 C:\OpenServer\domains\miska\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\miska\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\miska\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\miska\modules\cabinet\vendor\FXApi\FXAPIConnection.php:46
2013-11-08 14:37:43 --- CRITICAL: Exception [ 0 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'buyers' at line 1 ~ MODPATH\cabinet\vendor\FXApi\FXAPIClient.php [ 34 ] in C:\OpenServer\domains\miska\modules\cabinet\vendor\FXApi\FXAPIConnection.php:46
2013-11-08 14:37:43 --- DEBUG: #0 C:\OpenServer\domains\miska\modules\cabinet\vendor\FXApi\FXAPIConnection.php(46): FXAPIClient->call('crm.cabinet.upd...', Object(stdClass))
#1 C:\OpenServer\domains\miska\application\classes\Controller\Common.php(545): FXAPIConnection->call('crm.cabinet.upd...', Object(stdClass))
#2 C:\OpenServer\domains\miska\modules\cabinet\classes\Controller\Miska.php(315): Controller_Common->crmUpdateBuyerInfo(NULL)
#3 C:\OpenServer\domains\miska\system\classes\Kohana\Controller.php(84): Controller_Miska->action_changePhone()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\miska\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Miska))
#6 C:\OpenServer\domains\miska\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\miska\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\miska\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\miska\modules\cabinet\vendor\FXApi\FXAPIConnection.php:46