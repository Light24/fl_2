<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-03 12:07:38 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/default/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php:137
2014-07-03 12:07:38 --- DEBUG: #0 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/default/')
#1 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/default/', NULL)
#2 C:\OpenServer\domains\konkurs\modules\pages\classes\Pages.php(77): Kohana_View::factory('pages/default/')
#3 C:\OpenServer\domains\konkurs\modules\pages\classes\Pages\Page.php(190): Pages::getView('')
#4 C:\OpenServer\domains\konkurs\modules\pages\classes\Controller\Pages.php(26): Pages_Page->render()
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Pages->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#8 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php:137
2014-07-03 12:09:03 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/default/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php:137
2014-07-03 12:09:03 --- DEBUG: #0 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/default/')
#1 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/default/', NULL)
#2 C:\OpenServer\domains\konkurs\modules\pages\classes\Pages.php(77): Kohana_View::factory('pages/default/')
#3 C:\OpenServer\domains\konkurs\modules\pages\classes\Pages\Page.php(190): Pages::getView('')
#4 C:\OpenServer\domains\konkurs\modules\pages\classes\Controller\Pages.php(26): Pages_Page->render()
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Pages->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#8 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php:137