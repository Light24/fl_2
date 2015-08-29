<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-07 18:51:15 --- CRITICAL: View_Exception [ 0 ]: The requested view miska/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\miska\system\classes\Kohana\View.php:137
2013-11-07 18:51:15 --- DEBUG: #0 C:\OpenServer\domains\miska\system\classes\Kohana\View.php(137): Kohana_View->set_filename('miska/info')
#1 C:\OpenServer\domains\miska\system\classes\Kohana\View.php(30): Kohana_View->__construct('miska/info', NULL)
#2 C:\OpenServer\domains\miska\modules\cabinet\classes\Controller\Miska.php(493): Kohana_View::factory('miska/info')
#3 C:\OpenServer\domains\miska\system\classes\Kohana\Controller.php(84): Controller_Miska->action_info()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\miska\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Miska))
#6 C:\OpenServer\domains\miska\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\miska\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\miska\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\miska\system\classes\Kohana\View.php:137
2013-11-07 18:52:29 --- CRITICAL: View_Exception [ 0 ]: The requested view miska/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\miska\system\classes\Kohana\View.php:137
2013-11-07 18:52:29 --- DEBUG: #0 C:\OpenServer\domains\miska\system\classes\Kohana\View.php(137): Kohana_View->set_filename('miska/info')
#1 C:\OpenServer\domains\miska\system\classes\Kohana\View.php(30): Kohana_View->__construct('miska/info', NULL)
#2 C:\OpenServer\domains\miska\modules\cabinet\classes\Controller\Miska.php(493): Kohana_View::factory('miska/info')
#3 C:\OpenServer\domains\miska\system\classes\Kohana\Controller.php(84): Controller_Miska->action_info()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\miska\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Miska))
#6 C:\OpenServer\domains\miska\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\miska\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\miska\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\miska\system\classes\Kohana\View.php:137
2013-11-07 19:41:14 --- CRITICAL: Exception [ 0 ]: Table 'crm_stable.buyer' doesn't exist ~ MODPATH\cabinet\vendor\FXApi\FXAPIClient.php [ 34 ] in C:\OpenServer\domains\miska\modules\cabinet\vendor\FXApi\FXAPIConnection.php:46
2013-11-07 19:41:14 --- DEBUG: #0 C:\OpenServer\domains\miska\modules\cabinet\vendor\FXApi\FXAPIConnection.php(46): FXAPIClient->call('crm.cabinet.rea...', NULL)
#1 C:\OpenServer\domains\miska\application\classes\Controller\Common.php(545): FXAPIConnection->call('crm.cabinet.rea...', NULL)
#2 C:\OpenServer\domains\miska\modules\cabinet\classes\Controller\Miska.php(464): Controller_Common->crmAddressRead('bd06731e5993b3d...', 'pets')
#3 C:\OpenServer\domains\miska\system\classes\Kohana\Controller.php(84): Controller_Miska->action_pets()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\miska\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Miska))
#6 C:\OpenServer\domains\miska\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\miska\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\miska\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\miska\modules\cabinet\vendor\FXApi\FXAPIConnection.php:46