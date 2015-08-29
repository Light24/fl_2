<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-17 17:03:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function doProcessQuestion() ~ MODPATH\question\classes\Controller\Question.php [ 67 ] in :
2015-08-17 17:03:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 17:04:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function doProcessQuestion() ~ MODPATH\question\classes\Controller\Question.php [ 67 ] in :
2015-08-17 17:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 17:04:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Question::action_checkout() ~ MODPATH\question\classes\Controller\Question.php [ 85 ] in :
2015-08-17 17:04:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 17:08:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ MODPATH\question\classes\Controller\Question.php [ 85 ] in :
2015-08-17 17:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 18:11:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\question\classes\Controller\Question.php [ 164 ] in :
2015-08-17 18:11:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 18:12:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ MODPATH\question\classes\Controller\Question.php [ 162 ] in :
2015-08-17 18:12:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 18:21:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller::initial() ~ MODPATH\question\classes\Controller\Question.php [ 162 ] in :
2015-08-17 18:21:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 18:24:33 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Controller - assumed 'Controller' ~ MODPATH\question\classes\Controller\Question.php [ 163 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:163
2015-08-17 18:24:33 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(163): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 163, Array)
#1 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(67): Controller_Question->doProcessQuestion()
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ask()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(21): Kohana_Request->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_ask()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:163
2015-08-17 18:24:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\question\classes\Controller\Question.php [ 163 ] in :
2015-08-17 18:24:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 18:25:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller::getInstance() ~ MODPATH\question\classes\Controller\Question.php [ 163 ] in :
2015-08-17 18:25:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 18:55:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\header.php [ 111 ] in :
2015-08-17 18:55:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 19:04:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Session::instnace() ~ MODPATH\question\classes\Controller\Question.php [ 35 ] in :
2015-08-17 19:04:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 19:16:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_User' not found ~ MODPATH\question\classes\Controller\Question.php [ 39 ] in :
2015-08-17 19:16:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 19:16:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_User' not found ~ MODPATH\question\classes\Controller\Question.php [ 39 ] in :
2015-08-17 19:16:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 19:16:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_User' not found ~ MODPATH\question\classes\Controller\Question.php [ 48 ] in :
2015-08-17 19:16:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 19:16:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_User' not found ~ MODPATH\question\classes\Controller\Question.php [ 48 ] in :
2015-08-17 19:16:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 19:22:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_BOOLEAN_AND ~ MODPATH\users\classes\Controller\Users.php [ 553 ] in :
2015-08-17 19:22:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 19:44:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Session::instnace() ~ MODPATH\question\classes\Controller\Question.php [ 16 ] in :
2015-08-17 19:44:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 19:45:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ MODPATH\question\views\default\all.php [ 116 ] in :
2015-08-17 19:45:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 19:46:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item_aq ~ MODPATH\question\views\default\all.php [ 107 ] in Z:\home\test1.ru\www\modules\question\views\default\all.php:107
2015-08-17 19:46:11 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\all.php(107): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 107, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(31): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(15): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_get_questions()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\question\views\default\all.php:107
2015-08-17 19:52:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item_aq ~ MODPATH\question\views\default\all.php [ 106 ] in Z:\home\test1.ru\www\modules\question\views\default\all.php:106
2015-08-17 19:52:34 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\all.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 106, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(31): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(15): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_get_questions()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\question\views\default\all.php:106
2015-08-17 20:27:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Question::action_checkout() ~ MODPATH\question\classes\Controller\Question.php [ 258 ] in :
2015-08-17 20:27:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 20:28:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Question::getBrowser() ~ MODPATH\question\classes\Controller\Question.php [ 267 ] in :
2015-08-17 20:28:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 20:33:16 --- CRITICAL: ErrorException [ 1 ]: Class 'ControllerManager' not found ~ MODPATH\question\classes\Controller\Question.php [ 267 ] in :
2015-08-17 20:33:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 20:33:20 --- CRITICAL: ErrorException [ 1 ]: Class 'ControllerManager' not found ~ MODPATH\question\classes\Controller\Question.php [ 267 ] in :
2015-08-17 20:33:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 20:33:20 --- CRITICAL: ErrorException [ 1 ]: Class 'ControllerManager' not found ~ MODPATH\question\classes\Controller\Question.php [ 267 ] in :
2015-08-17 20:33:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 20:33:23 --- CRITICAL: ErrorException [ 1 ]: Class 'ControllerManager' not found ~ MODPATH\question\classes\Controller\Question.php [ 267 ] in :
2015-08-17 20:33:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 20:34:05 --- CRITICAL: ErrorException [ 1 ]: Class 'ControllerManager' not found ~ MODPATH\question\classes\Controller\Question.php [ 267 ] in :
2015-08-17 20:34:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-17 20:53:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Session_Native::get_user() ~ MODPATH\users\classes\Controller\Users.php [ 72 ] in :
2015-08-17 20:53:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :