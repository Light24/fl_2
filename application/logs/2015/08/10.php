<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-10 13:30:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\contest\views\default\start.php [ 89 ] in Z:\home\test1.ru\www\modules\contest\views\default\start.php:89
2015-08-10 13:30:07 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\start.php(89): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 89, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\start.php:89
2015-08-10 13:30:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\contest\views\default\side_right.php [ 31 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-10 13:30:07 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-10 23:03:46 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: style ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\test1.ru\www\application\classes\Controller\Common.php:64
2015-08-10 23:03:46 --- DEBUG: #0 Z:\home\test1.ru\www\application\classes\Controller\Common.php(64): Kohana_View->__get('style')
#1 Z:\home\test1.ru\www\modules\contest\classes\Controller\Contest.php(141): Controller_Common->addCSS('default/css/que...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\application\classes\Controller\Common.php:64
2015-08-10 23:03:58 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: style ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\test1.ru\www\application\classes\Controller\Common.php:65
2015-08-10 23:03:58 --- DEBUG: #0 Z:\home\test1.ru\www\application\classes\Controller\Common.php(65): Kohana_View->__get('style')
#1 Z:\home\test1.ru\www\modules\contest\classes\Controller\Contest.php(141): Controller_Common->addCSS('default/css/que...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\application\classes\Controller\Common.php:65