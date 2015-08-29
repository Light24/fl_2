<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-22 17:53:11 --- EMERGENCY: Exception [ 0 ]: Файл  не найден! ~ MODPATH\cabinet\classes\Controller\SendMessage.php [ 510 ] in Z:\home\miska\www\modules\cabinet\classes\Controller\SendMessage.php:364
2013-09-22 17:53:11 --- NOTICE: #0 Z:\home\miska\www\modules\cabinet\classes\Controller\SendMessage.php(364): Send_mail->_send()
#1 Z:\home\miska\www\modules\cabinet\classes\Controller\Miska.php(195): Send_mail->send()
#2 Z:\home\miska\www\system\classes\Kohana\Controller.php(84): Controller_Miska->action_feedback()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\miska\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Miska))
#5 Z:\home\miska\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\miska\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\miska\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\miska\www\modules\cabinet\classes\Controller\SendMessage.php:364
2013-09-22 18:23:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view miska/restoreSuccesMsg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\miska\www\system\classes\Kohana\View.php:137
2013-09-22 18:23:33 --- NOTICE: #0 Z:\home\miska\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('miska/restoreSu...')
#1 Z:\home\miska\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('miska/restoreSu...', NULL)
#2 Z:\home\miska\www\modules\cabinet\classes\Controller\Miska.php(105): Kohana_View::factory('miska/restoreSu...')
#3 Z:\home\miska\www\system\classes\Kohana\Controller.php(84): Controller_Miska->action_feedback()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\miska\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Miska))
#6 Z:\home\miska\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\miska\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\miska\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\miska\www\system\classes\Kohana\View.php:137