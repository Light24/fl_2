<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-15 12:46:16 --- CRITICAL: Exception [ 0 ]: Operation timed out after 10000 milliseconds with 0 bytes received ~ MODPATH\cabinet\vendor\FXApi\HTTPClient.php [ 36 ] in D:\webserver\domains\cardlab\modules\cabinet\vendor\FXApi\FXAPIClient.php:24
2013-02-15 12:46:16 --- DEBUG: #0 D:\webserver\domains\cardlab\modules\cabinet\vendor\FXApi\FXAPIClient.php(24): HTTPClient->request('http://144.76.9...', '{"email":"web_c...')
#1 D:\webserver\domains\cardlab\modules\cabinet\vendor\FXApi\FXAPIConnection.php(25): FXAPIClient->call('core.user.Login', Object(stdClass))
#2 D:\webserver\domains\cardlab\modules\cabinet\vendor\FXApi\FXAPIConnection.php(34): FXAPIConnection->login()
#3 D:\webserver\domains\cardlab\application\classes\Controller\Common.php(325): FXAPIConnection->call('crm.cabinet.Inf...', Object(stdClass))
#4 D:\webserver\domains\cardlab\modules\cabinet\classes\Controller\Cabinet.php(31): Controller_Common->updateSession()
#5 D:\webserver\domains\cardlab\modules\cabinet\classes\Controller\Fixprice.php(8): Controller_Cabinet->before()
#6 D:\webserver\domains\cardlab\system\classes\Kohana\Controller.php(69): Controller_Fixprice->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\webserver\domains\cardlab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fixprice))
#9 D:\webserver\domains\cardlab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\webserver\domains\cardlab\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\webserver\domains\cardlab\index.php(118): Kohana_Request->execute()
#12 {main} in D:\webserver\domains\cardlab\modules\cabinet\vendor\FXApi\FXAPIClient.php:24