<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-11 11:24:46 --- CRITICAL: Exception [ 0 ]:  malformed ~ MODPATH\cabinet\vendor\FXApi\HTTPClient.php [ 36 ] in D:\webserver\domains\cardlab\modules\cabinet\vendor\FXApi\FXAPIClient.php:24
2013-03-11 11:24:46 --- DEBUG: #0 D:\webserver\domains\cardlab\modules\cabinet\vendor\FXApi\FXAPIClient.php(24): HTTPClient->request(NULL, '{"email":null,"...')
#1 D:\webserver\domains\cardlab\modules\cabinet\vendor\FXApi\FXAPIConnection.php(26): FXAPIClient->call('core.user.Login', Object(stdClass))
#2 D:\webserver\domains\cardlab\modules\cabinet\vendor\FXApi\FXAPIConnection.php(35): FXAPIConnection->login()
#3 D:\webserver\domains\cardlab\application\classes\Controller\Common.php(439): FXAPIConnection->call('crm.cabinet.Reg...', Object(stdClass))
#4 D:\webserver\domains\cardlab\modules\cabinet\classes\Controller\Cabinet.php(285): Controller_Common->register(true)
#5 D:\webserver\domains\cardlab\system\classes\Kohana\Controller.php(84): Controller_Cabinet->action_nocardRegister()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\webserver\domains\cardlab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#8 D:\webserver\domains\cardlab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\webserver\domains\cardlab\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\webserver\domains\cardlab\index.php(118): Kohana_Request->execute()
#11 {main} in D:\webserver\domains\cardlab\modules\cabinet\vendor\FXApi\FXAPIClient.php:24