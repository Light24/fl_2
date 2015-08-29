<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-20 08:43:07 --- EMERGENCY: Exception [ 0 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 3 ~ MODPATH\cabinet\vendor\FXApi\FXAPIClient.php [ 34 ] in Z:\home\miska\www\modules\cabinet\vendor\FXApi\FXAPIConnection.php:44
2013-09-20 08:43:07 --- NOTICE: #0 Z:\home\miska\www\modules\cabinet\vendor\FXApi\FXAPIConnection.php(44): FXAPIClient->call('crm.cabinet.Res...', Object(stdClass))
#1 Z:\home\miska\www\application\classes\Controller\Common.php(348): FXAPIConnection->call('crm.cabinet.Res...', Object(stdClass))
#2 Z:\home\miska\www\modules\cabinet\classes\Controller\Cabinet.php(520): Controller_Common->crmRestorePassword(NULL, NULL)
#3 Z:\home\miska\www\system\classes\Kohana\Controller.php(84): Controller_Cabinet->action_restoreForm()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\miska\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Miska))
#6 Z:\home\miska\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\miska\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\miska\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\miska\www\modules\cabinet\vendor\FXApi\FXAPIConnection.php:44