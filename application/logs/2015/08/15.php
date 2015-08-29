<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-15 10:06:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: target ~ MODPATH\contest\views\default\leaders.php [ 68 ] in Z:\home\test1.ru\www\modules\contest\views\default\leaders.php:68
2015-08-15 10:06:19 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\leaders.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 68, Array)
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
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\leaders.php:68
2015-08-15 10:06:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\contest\views\default\side_right.php [ 31 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:06:20 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 31, Array)
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
2015-08-15 10:11:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:11:04 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:12:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:12:34 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:12:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:12:45 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:12:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:12:52 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:13:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:13:23 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:13:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:13:54 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:18:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:18:38 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:19:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:19:51 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:19:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:19:58 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:20:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:20:21 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:20:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headers ~ APPPATH\views\Common.php [ 9 ] in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:20:22 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:9
2015-08-15 10:31:44 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-15 10:31:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^question(?P</...', 'question/all', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2015-08-15 10:35:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\Controller\Question.php [ 8 ] in :
2015-08-15 10:35:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 10:36:55 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-15 10:36:55 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\application\classes\Controller\Question.php(10): Kohana_Controller_Template->before()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Question->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-15 10:41:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pageTitle ~ APPPATH\views\Common.php [ 10 ] in Z:\home\test1.ru\www\application\views\Common.php:10
2015-08-15 10:41:13 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 10, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:10
2015-08-15 10:42:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\Common.php [ 10 ] in :
2015-08-15 10:42:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 10:42:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\Common.php [ 10 ] in :
2015-08-15 10:42:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 10:42:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\Common.php [ 10 ] in :
2015-08-15 10:42:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 10:42:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\Common.php [ 10 ] in :
2015-08-15 10:42:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 10:42:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\contest\views\default\side_right.php [ 31 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:42:56 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:43:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\contest\views\default\side_right.php [ 31 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:43:15 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:43:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\contest\views\default\side_right.php [ 31 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:43:43 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:44:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\contest\views\default\side_right.php [ 31 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:44:58 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:45:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pageTitle ~ APPPATH\views\Common.php [ 10 ] in Z:\home\test1.ru\www\application\views\Common.php:10
2015-08-15 10:45:41 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 10, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:10
2015-08-15 10:46:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\contest\views\default\side_right.php [ 31 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:46:20 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:47:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\contest\views\default\side_right.php [ 38 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:38
2015-08-15 10:47:39 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 38, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:38
2015-08-15 10:48:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\contest\views\default\side_right.php [ 40 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:40
2015-08-15 10:48:20 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 40, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:40
2015-08-15 10:48:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\contest\views\default\side_right.php [ 40 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:40
2015-08-15 10:48:27 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 40, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:40
2015-08-15 10:49:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\contest\views\default\side_right.php [ 31 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:49:39 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:31
2015-08-15 10:50:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ISSET ~ MODPATH\contest\views\default\side_right.php [ 31 ] in :
2015-08-15 10:50:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 10:50:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ MODPATH\contest\views\default\side_right.php [ 32 ] in :
2015-08-15 10:50:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 11:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'question' at 'MODPATH\questions' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in Z:\home\test1.ru\www\application\bootstrap.php:137
2015-08-15 11:24:50 --- DEBUG: #0 Z:\home\test1.ru\www\application\bootstrap.php(137): Kohana_Core::modules(Array)
#1 Z:\home\test1.ru\www\index.php(102): require('Z:\home\test1.r...')
#2 {main} in Z:\home\test1.ru\www\application\bootstrap.php:137
2015-08-15 11:41:53 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Question::action_all(), called in Z:\home\test1.ru\www\system\classes\Kohana\Controller.php on line 84 and defined ~ MODPATH\question\classes\Controller\Question.php [ 5 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:5
2015-08-15 11:41:53 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\test1.r...', 5, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:5
2015-08-15 11:43:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH\classes\Controller\Manager.php [ 13 ] in :
2015-08-15 11:43:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 11:44:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: limitInt ~ APPPATH\classes\Controller\Manager.php [ 32 ] in Z:\home\test1.ru\www\application\classes\Controller\Manager.php:32
2015-08-15 11:44:10 --- DEBUG: #0 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 32, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\application\classes\Controller\Manager.php:32
2015-08-15 11:44:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ MODPATH\question\classes\Controller\Question.php [ 17 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:17
2015-08-15 11:44:31 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 17, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:17
2015-08-15 11:45:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ MODPATH\question\classes\Controller\Question.php [ 17 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:17
2015-08-15 11:45:12 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 17, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:17
2015-08-15 11:51:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ MODPATH\question\classes\Controller\Question.php [ 25 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:25
2015-08-15 11:51:12 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 25, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:25
2015-08-15 11:51:20 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\question\classes\Controller\Question.php [ 27 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 11:51:20 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(27): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 27, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 11:51:22 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\question\classes\Controller\Question.php [ 27 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 11:51:22 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(27): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 27, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 11:51:22 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\question\classes\Controller\Question.php [ 27 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 11:51:22 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(27): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 27, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 11:51:23 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\question\classes\Controller\Question.php [ 27 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 11:51:23 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(27): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 27, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 11:51:23 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\question\classes\Controller\Question.php [ 27 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 11:51:23 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(27): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 27, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 11:51:39 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Question::$tpl ~ MODPATH\question\classes\Controller\Question.php [ 29 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:29
2015-08-15 11:51:39 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 29, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:29
2015-08-15 11:51:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ MODPATH\question\classes\Controller\Question.php [ 34 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:34
2015-08-15 11:51:53 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 34, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:34
2015-08-15 11:51:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ MODPATH\question\classes\Controller\Question.php [ 34 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:34
2015-08-15 11:51:53 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 34, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:34
2015-08-15 11:52:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ MODPATH\question\classes\Controller\Question.php [ 25 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:25
2015-08-15 11:52:24 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 25, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:25
2015-08-15 11:54:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ MODPATH\question\classes\Controller\Question.php [ 25 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:25
2015-08-15 11:54:03 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 25, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:25
2015-08-15 11:54:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::get() ~ APPPATH\classes\Controller\Manager.php [ 36 ] in :
2015-08-15 11:54:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 11:55:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::b() ~ APPPATH\classes\Controller\Manager.php [ 36 ] in :
2015-08-15 11:55:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 12:00:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: all_question ~ APPPATH\classes\Controller\Manager.php [ 31 ] in Z:\home\test1.ru\www\application\classes\Controller\Manager.php:31
2015-08-15 12:00:41 --- DEBUG: #0 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\application\classes\Controller\Manager.php:31
2015-08-15 12:00:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: all_question ~ APPPATH\classes\Controller\Manager.php [ 31 ] in Z:\home\test1.ru\www\application\classes\Controller\Manager.php:31
2015-08-15 12:00:42 --- DEBUG: #0 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\application\classes\Controller\Manager.php:31
2015-08-15 12:20:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ MODPATH\question\classes\Controller\Question.php [ 27 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 12:20:02 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 27, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:27
2015-08-15 12:25:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: count ~ MODPATH\question\classes\Controller\Question.php [ 15 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:25:14 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 15, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:25:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: count ~ MODPATH\question\classes\Controller\Question.php [ 15 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:25:26 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 15, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:25:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: count ~ MODPATH\question\classes\Controller\Question.php [ 15 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:25:34 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 15, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:25:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: count ~ MODPATH\question\classes\Controller\Question.php [ 15 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:25:56 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 15, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:26:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: count ~ MODPATH\question\classes\Controller\Question.php [ 15 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:26:02 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 15, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:26:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 12:26:15 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 12:26:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: count ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 12:26:28 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 12:27:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: count ~ MODPATH\question\classes\Controller\Question.php [ 17 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:17
2015-08-15 12:27:14 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 17, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:17
2015-08-15 12:28:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: count ~ MODPATH\question\classes\Controller\Question.php [ 15 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:28:34 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 15, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:15
2015-08-15 12:44:25 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ MODPATH\question\init.php [ 7 ] in Z:\home\test1.ru\www\modules\question\init.php:7
2015-08-15 12:44:25 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\init.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 7, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\application\bootstrap.php(137): Kohana_Core::modules(Array)
#3 Z:\home\test1.ru\www\index.php(102): require('Z:\home\test1.r...')
#4 {main} in Z:\home\test1.ru\www\modules\question\init.php:7
2015-08-15 12:44:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\question\init.php [ 7 ] in Z:\home\test1.ru\www\modules\question\init.php:7
2015-08-15 12:44:29 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\init.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 7, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\application\bootstrap.php(137): Kohana_Core::modules(Array)
#3 Z:\home\test1.ru\www\index.php(102): require('Z:\home\test1.r...')
#4 {main} in Z:\home\test1.ru\www\modules\question\init.php:7
2015-08-15 12:46:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function body() ~ MODPATH\question\classes\Controller\Question.php [ 35 ] in :
2015-08-15 12:46:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 12:46:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function body() ~ MODPATH\question\classes\Controller\Question.php [ 35 ] in :
2015-08-15 12:46:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 12:47:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Question::$tpl ~ MODPATH\question\classes\Controller\Question.php [ 35 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:35
2015-08-15 12:47:55 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 35, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:35
2015-08-15 12:50:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: all_question ~ MODPATH\question\classes\Controller\Question.php [ 36 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:36
2015-08-15 12:50:11 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 36, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(35): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:36
2015-08-15 13:37:28 --- CRITICAL: View_Exception [ 0 ]: The requested view all could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-15 13:37:28 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('all')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('all', Array)
#2 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(37): Kohana_View::factory('all', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-15 13:39:13 --- CRITICAL: View_Exception [ 0 ]: The requested view all could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-15 13:39:13 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('all')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('all', Array)
#2 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(37): Kohana_View::factory('all', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-15 13:39:35 --- CRITICAL: View_Exception [ 0 ]: The requested view default/all could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-15 13:39:35 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/all')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/all', Array)
#2 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(37): Kohana_View::factory('default/all', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-15 14:28:22 --- CRITICAL: View_Exception [ 0 ]: The requested view default/start.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-15 14:28:22 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/start.p...')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/start.p...', Array)
#2 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(37): Kohana_View::factory('default/start.p...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-15 14:36:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: questions ~ MODPATH\question\views\default\all.php [ 8 ] in Z:\home\test1.ru\www\modules\question\views\default\all.php:8
2015-08-15 14:36:58 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\all.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 8, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(37): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\question\views\default\all.php:8
2015-08-15 14:50:40 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant photos - assumed 'photos' ~ MODPATH\question\views\default\all.php [ 41 ] in Z:\home\test1.ru\www\modules\question\views\default\all.php:41
2015-08-15 14:50:40 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\all.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 41, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(37): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\question\views\default\all.php:41
2015-08-15 15:50:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: catID ~ MODPATH\question\classes\Controller\Question.php [ 47 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:47
2015-08-15 15:50:02 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 47, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions_ajax()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:47
2015-08-15 15:50:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: catID ~ MODPATH\question\classes\Controller\Question.php [ 47 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:47
2015-08-15 15:50:30 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 47, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions_ajax()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:47
2015-08-15 15:50:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: catID ~ MODPATH\question\classes\Controller\Question.php [ 47 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:47
2015-08-15 15:50:59 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 47, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions_ajax()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:47
2015-08-15 16:27:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:27:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:28:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:28:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:28:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:28:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:28:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:28:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:29:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ MODPATH\question\classes\Controller\Question.php [ 100 ] in :
2015-08-15 16:29:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:29:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_questions() ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in :
2015-08-15 16:29:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:29:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: questions ~ MODPATH\question\classes\Controller\Question.php [ 25 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:25
2015-08-15 16:29:31 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 25, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:25
2015-08-15 16:29:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_questions() ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in :
2015-08-15 16:29:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:29:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_questions() ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in :
2015-08-15 16:29:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:29:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_questions() ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in :
2015-08-15 16:29:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:29:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_questions() ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in :
2015-08-15 16:29:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:30:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_questions() ~ MODPATH\question\classes\Controller\Question.php [ 17 ] in :
2015-08-15 16:30:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:30:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_questions() ~ MODPATH\question\classes\Controller\Question.php [ 17 ] in :
2015-08-15 16:30:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:30:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ORDER_BY_DATE ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:30:20 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:30:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:30:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:30:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:30:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:30:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:30:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:30:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:30:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:30:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:31:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ORDER_BY_DATE ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:31:11 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:31:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:31:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:31:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:31:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:31:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_UNSET ~ MODPATH\question\classes\Controller\Question.php [ 33 ] in :
2015-08-15 16:31:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:31:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ORDER_BY_DATE ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:31:59 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:32:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ MODPATH\question\classes\Controller\Question.php [ 49 ] in :
2015-08-15 16:32:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:32:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ MODPATH\question\classes\Controller\Question.php [ 55 ] in :
2015-08-15 16:32:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:32:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ORDER_BY_DATE ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:32:35 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:33:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ORDER_BY_DATE ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:33:22 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:35:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ORDER_BY_DATE ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:35:08 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:35:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ORDER_BY_DATE ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:35:20 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 16:35:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: GET_ROWS_COUNT ~ MODPATH\question\classes\Controller\Question.php [ 63 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:63
2015-08-15 16:35:53 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 63, Array)
#1 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Controller_Question->get_questions(Array, 0)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:63
2015-08-15 16:36:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: where ~ MODPATH\question\classes\Controller\Question.php [ 74 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:74
2015-08-15 16:36:19 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 74, Array)
#1 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Controller_Question->get_questions(Array, 0)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:74
2015-08-15 16:36:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: where ~ MODPATH\question\classes\Controller\Question.php [ 74 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:74
2015-08-15 16:36:52 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 74, Array)
#1 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Controller_Question->get_questions(Array, 0)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:74
2015-08-15 16:37:06 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'BY question.date_post DESCLIMIT 0, 10' at line 10 [ SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
          `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`, photos_q.*
          FROM `question`
          LEFT JOIN `users` ON question.user_id = users.id
          LEFT JOIN `category` ON question.contest_id = category.id
          LEFT JOIN `photos_q` ON question.id = photos_q.question_id
          LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
          LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
          LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
          ON question.id = l.work_idORDER BY question.date_post DESCLIMIT 0, 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-15 16:37:06 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT question...', false, Array)
#1 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(74): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Controller_Question->get_questions(Array, 0)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-15 16:40:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_questions() ~ MODPATH\question\classes\Controller\Question.php [ 93 ] in :
2015-08-15 16:40:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 16:41:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ORDER_BY_LIKE ~ MODPATH\question\classes\Controller\Question.php [ 93 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:93
2015-08-15 16:41:12 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 93, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions_ajax()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:93
2015-08-15 17:25:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\question\views\default\all.php [ 102 ] in :
2015-08-15 17:25:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 17:25:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\question\views\default\all.php [ 102 ] in :
2015-08-15 17:25:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 17:26:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\question\views\default\all.php [ 105 ] in :
2015-08-15 17:26:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 17:26:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\question\views\default\all.php [ 105 ] in :
2015-08-15 17:26:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 17:54:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\question\views\default\all.php [ 97 ] in :
2015-08-15 17:54:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 18:33:08 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC1' at line 10 [ SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
          `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`, photos_q.*
          FROM `question`
          LEFT JOIN `users` ON question.user_id = users.id
          LEFT JOIN `category` ON question.contest_id = category.id
          LEFT JOIN `photos_q` ON question.id = photos_q.question_id
          LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
          LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
          LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
          ON question.id = l.work_id ORDER BY question.date_post DESC1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-15 18:33:08 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT question...', false, Array)
#1 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(75): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Controller_Question->get_questions(Array, 0)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-15 18:37:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\question\classes\Controller\Question.php [ 32 ] in :
2015-08-15 18:37:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 18:37:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\question\classes\Controller\Question.php [ 32 ] in :
2015-08-15 18:37:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 18:37:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(' ~ MODPATH\question\classes\Controller\Question.php [ 32 ] in :
2015-08-15 18:37:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 18:37:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ MODPATH\question\classes\Controller\Question.php [ 64 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:64
2015-08-15 18:37:44 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 64, Array)
#1 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Controller_Question->get_questions(Array, 0, 0, 10)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_all()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(16): Kohana_Request->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_all()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:64
2015-08-15 18:37:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: GET_ROWS_COUNT ~ MODPATH\question\classes\Controller\Question.php [ 95 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:95
2015-08-15 18:37:55 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 95, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions_ajax()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:95
2015-08-15 19:00:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Manager.php [ 13 ] in :
2015-08-15 19:00:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 19:01:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Manager.php [ 13 ] in :
2015-08-15 19:01:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 19:01:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Manager.php [ 13 ] in :
2015-08-15 19:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 19:01:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Manager.php [ 13 ] in :
2015-08-15 19:01:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 19:01:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\classes\Controller\Manager.php [ 14 ] in :
2015-08-15 19:01:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 19:04:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 18 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-15 19:04:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^question(?:/a...', 'question', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2015-08-15 19:04:32 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 18 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-15 19:04:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^question(?:/a...', 'question/all', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2015-08-15 19:09:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in :
2015-08-15 19:09:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 19:09:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in :
2015-08-15 19:09:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 19:10:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: catID ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 19:10:01 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(14): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_get_questions()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:16
2015-08-15 19:20:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\Controller\Manager.php [ 12 ] in :
2015-08-15 19:20:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 19:43:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ MODPATH\contest\views\default\side_right.php [ 26 ] in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:26
2015-08-15 19:43:35 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\views\default\side_right.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 26, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(39): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Common.php(116): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#13 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\test1.ru\www\modules\contest\views\default\side_right.php:26
2015-08-15 19:47:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\question\views\default\side_right.php [ 46 ] in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:46
2015-08-15 19:47:25 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\side_right.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 46, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(39): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Common.php(116): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#13 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:46
2015-08-15 19:58:41 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Question::$tpl ~ MODPATH\question\classes\Controller\Question.php [ 46 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:46
2015-08-15 19:58:41 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(46): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 46, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions_best()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Common.php(91): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:46
2015-08-15 19:59:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Question::$responce ~ MODPATH\question\classes\Controller\Question.php [ 46 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:46
2015-08-15 19:59:44 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(46): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 46, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions_best()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Common.php(91): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:46
2015-08-15 22:09:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\question\views\default\side_right.php [ 46 ] in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:46
2015-08-15 22:09:29 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\side_right.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 46, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(57): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Common.php(92): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#13 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:46
2015-08-15 22:09:29 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$execute ~ APPPATH\classes\Controller\Manager.php [ 37 ] in Z:\home\test1.ru\www\application\classes\Controller\Manager.php:37
2015-08-15 22:09:29 --- DEBUG: #0 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 37, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\application\classes\Controller\Manager.php:37
2015-08-15 22:09:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: q ~ MODPATH\question\views\default\side_right.php [ 46 ] in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:46
2015-08-15 22:09:42 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\side_right.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 46, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(57): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Common.php(92): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#13 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:46
2015-08-15 22:10:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\question\views\default\side_right.php [ 52 ] in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:52
2015-08-15 22:10:47 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\side_right.php(52): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 52, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(57): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Common.php(92): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#13 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:52
2015-08-15 22:23:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: plusSearch ~ MODPATH\users\classes\Controller\Users.php [ 46 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:46
2015-08-15 22:23:09 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 46, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(37): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:46
2015-08-15 22:23:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: best ~ MODPATH\users\classes\Controller\Users.php [ 47 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:47
2015-08-15 22:23:43 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 47, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(37): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:47
2015-08-15 22:24:16 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC' at line 12 [ SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
        `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`
        FROM `question`
        LEFT JOIN `users` ON question.user_id = users.id
        LEFT JOIN `category` ON question.contest_id = category.id
        
        LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
        LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
        LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
        ON question.id = l.work_id
        WHERE `user_id`=14
         DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-15 22:24:16 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT question...', false, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(48): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(37): Kohana_Request->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-15 22:24:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\users\views\default\user.php [ 273 ] in Z:\home\test1.ru\www\modules\users\views\default\user.php:273
2015-08-15 22:24:47 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\user.php(273): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 273, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(57): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(37): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\user.php:273
2015-08-15 22:26:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\users\views\default\user.php [ 273 ] in :
2015-08-15 22:26:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 22:27:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: countAsk ~ MODPATH\users\views\default\user.php [ 392 ] in Z:\home\test1.ru\www\modules\users\views\default\user.php:392
2015-08-15 22:27:02 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\user.php(392): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 392, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(58): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(37): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\user.php:392
2015-08-15 22:27:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\users\views\default\user.php [ 392 ] in :
2015-08-15 22:27:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 22:40:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\classes\Controller\Common.php [ 91 ] in :
2015-08-15 22:40:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-15 22:43:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: side_right ~ APPPATH\views\Common.php [ 51 ] in Z:\home\test1.ru\www\application\views\Common.php:51
2015-08-15 22:43:59 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 51, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:51
2015-08-15 22:44:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: side_right ~ APPPATH\views\Common.php [ 51 ] in Z:\home\test1.ru\www\application\views\Common.php:51
2015-08-15 22:44:05 --- DEBUG: #0 Z:\home\test1.ru\www\application\views\Common.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 51, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\application\views\Common.php:51
2015-08-15 22:59:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ MODPATH\question\views\default\side_right.php [ 53 ] in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:53
2015-08-15 22:59:41 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\side_right.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 53, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(57): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Common.php(92): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#13 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:53