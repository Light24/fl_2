<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-18 00:10:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\users\classes\Controller\Users.php [ 544 ] in :
2015-08-18 00:10:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 00:20:59 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 30 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 00:20:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^module_users/...', 'user/15', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#5 {main} in :
2015-08-18 00:21:07 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 30 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 00:21:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^module_users/...', 'user/15', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#5 {main} in :
2015-08-18 00:21:16 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 30 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 00:21:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^module_users/...', 'user/15', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#5 {main} in :
2015-08-18 00:21:39 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 30 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 00:21:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^module_users/...', 'user/15', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#5 {main} in :
2015-08-18 00:22:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 30 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 00:22:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^module_users/...', 'user/15', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#5 {main} in :
2015-08-18 00:25:47 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\users\classes\Controller\Users.php [ 534 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:534
2015-08-18 00:25:47 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(534): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 534, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:534
2015-08-18 00:27:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photo ~ MODPATH\users\views\default\messages.php [ 29 ] in Z:\home\test1.ru\www\modules\users\views\default\messages.php:29
2015-08-18 00:27:31 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\messages.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 29, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(549): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\messages.php:29
2015-08-18 00:32:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Users::set_full_avataqr_path() ~ MODPATH\users\classes\Controller\Users.php [ 546 ] in :
2015-08-18 00:32:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 00:32:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ MODPATH\users\views\default\messages.php [ 158 ] in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:32:54 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\messages.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 158, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(553): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:35:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ MODPATH\users\classes\Controller\Users.php [ 553 ] in :
2015-08-18 00:35:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 00:47:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ MODPATH\users\views\default\messages.php [ 158 ] in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:47:33 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\messages.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 158, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(543): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:48:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ MODPATH\users\views\default\messages.php [ 158 ] in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:48:11 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\messages.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 158, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(544): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:48:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ MODPATH\users\views\default\messages.php [ 158 ] in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:48:24 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\messages.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 158, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(544): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:48:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function rpint_r() ~ MODPATH\users\classes\Controller\Users.php [ 539 ] in :
2015-08-18 00:48:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 00:48:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ MODPATH\users\views\default\messages.php [ 158 ] in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:48:48 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\messages.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 158, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(544): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:49:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ MODPATH\users\views\default\messages.php [ 158 ] in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:49:57 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\messages.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 158, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(544): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:50:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ MODPATH\users\views\default\messages.php [ 158 ] in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:50:50 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\messages.php(158): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 158, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(544): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\messages.php:158
2015-08-18 00:56:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\users\classes\Controller\Users.php [ 614 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:614
2015-08-18 00:56:03 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(614): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 614, Array)
#1 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(37): Controller_Users::set_full_avatar_path(Array)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions_best()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\application\classes\Controller\Common.php(90): Kohana_Request->execute()
#8 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#15 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:614
2015-08-18 00:56:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ MODPATH\users\classes\Controller\Users.php [ 615 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:615
2015-08-18 00:56:03 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(615): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 615, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(537): Controller_Users::set_full_avatar_path(Array)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:615
2015-08-18 00:56:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ MODPATH\users\classes\Controller\Users.php [ 615 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:615
2015-08-18 00:56:19 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(615): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 615, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(537): Controller_Users::set_full_avatar_path(Array)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(45): Kohana_Request->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:615
2015-08-18 00:58:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function set_full_avatar_path() ~ MODPATH\users\classes\Controller\Users.php [ 615 ] in :
2015-08-18 00:58:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 01:10:54 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\users\classes\Controller\Users.php [ 616 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:616
2015-08-18 01:10:54 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(616): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 616, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_message_reply()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(52): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_message_reply()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:616
2015-08-18 01:13:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Users::response() ~ MODPATH\users\classes\Controller\Users.php [ 575 ] in :
2015-08-18 01:13:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 01:13:55 --- CRITICAL: View_Exception [ 0 ]: The requested view /default/msg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-18 01:13:55 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/default/msg')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/default/msg', Array)
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(579): Kohana_View::factory('/default/msg', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_message_reply()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(52): Kohana_Request->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_message_reply()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#15 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-18 01:14:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: points ~ MODPATH\users\views\default\msg.php [ 4 ] in Z:\home\test1.ru\www\modules\users\views\default\msg.php:4
2015-08-18 01:14:59 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\msg.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 4, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(579): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_message_reply()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(52): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_message_reply()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\msg.php:4
2015-08-18 01:19:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ MODPATH\users\classes\Controller\Users.php [ 580 ] in :
2015-08-18 01:19:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 01:19:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: msgSend ~ MODPATH\users\views\default\msg.php [ 143 ] in Z:\home\test1.ru\www\modules\users\views\default\msg.php:143
2015-08-18 01:19:31 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\msg.php(143): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 143, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(583): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_message_reply()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(52): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_message_reply()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\msg.php:143
2015-08-18 01:28:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: msgRes ~ MODPATH\users\classes\Controller\Users.php [ 608 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:608
2015-08-18 01:28:28 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(608): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 608, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_message_reply()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(52): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_message_reply()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:608
2015-08-18 01:59:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Common.php [ 81 ] in :
2015-08-18 01:59:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 02:08:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item_aq ~ MODPATH\users\views\default\avatar.php [ 73 ] in Z:\home\test1.ru\www\modules\users\views\default\avatar.php:73
2015-08-18 02:08:24 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\avatar.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 73, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(513): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_photos()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(88): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_photos()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\avatar.php:73
2015-08-18 02:09:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item_aq ~ MODPATH\users\views\default\avatar.php [ 73 ] in Z:\home\test1.ru\www\modules\users\views\default\avatar.php:73
2015-08-18 02:09:56 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\avatar.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 73, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(513): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_photos()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(88): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_photos()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\avatar.php:73
2015-08-18 02:13:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item_aq ~ MODPATH\users\views\default\avatar.php [ 74 ] in Z:\home\test1.ru\www\modules\users\views\default\avatar.php:74
2015-08-18 02:13:03 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\avatar.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 74, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(513): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_photos()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(88): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_photos()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\avatar.php:74
2015-08-18 02:13:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item_aq ~ MODPATH\users\views\default\avatar.php [ 75 ] in Z:\home\test1.ru\www\modules\users\views\default\avatar.php:75
2015-08-18 02:13:40 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\avatar.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 75, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(513): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_photos()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(88): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_photos()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\avatar.php:75
2015-08-18 02:41:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: output ~ MODPATH\users\classes\Controller\Users.php [ 695 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:695
2015-08-18 02:41:15 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(695): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 695, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_delete_photo_ajax()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:695
2015-08-18 02:49:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Contests' not found ~ MODPATH\contest\classes\Controller\ContestControl.php [ 31 ] in :
2015-08-18 02:49:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 11:50:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Manager.php [ 14 ] in :
2015-08-18 11:50:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 11:50:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Manager.php [ 14 ] in :
2015-08-18 11:50:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 11:51:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Manager.php [ 14 ] in :
2015-08-18 11:51:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 11:51:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Manager.php [ 15 ] in :
2015-08-18 11:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 11:51:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Manager.php [ 15 ] in :
2015-08-18 11:51:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 11:53:13 --- CRITICAL: View_Exception [ 0 ]: The requested view default/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-18 11:53:13 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/about')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/about', NULL)
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_View::factory('default/about')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_show_static_page()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-18 11:54:36 --- CRITICAL: View_Exception [ 0 ]: The requested view default/help could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-18 11:54:36 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default/help')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/help', NULL)
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_View::factory('default/help')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_show_static_page()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-18 19:47:26 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 18 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 19:47:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^/social_auth\...', 'social_ath.php', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2015-08-18 19:47:42 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 16 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 19:47:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^/social_authp...', 'social_ath.php', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2015-08-18 19:47:52 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 18 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 19:47:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^/social_auth\...', 'social_ath.php', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2015-08-18 19:47:53 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 18 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 19:47:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^/social_auth\...', 'social_ath.php', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2015-08-18 19:48:09 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 18 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 19:48:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^/social_auth\...', 'social_athphp', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2015-08-18 19:48:12 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 16 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 19:48:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^/social_authp...', 'social_athphp', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2015-08-18 19:49:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [0function.preg-match0]: Compilation failed: unmatched parentheses at offset 18 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2015-08-18 19:49:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [0...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Route.php(420): preg_match('#^/social_auth\...', 'social_ath.php', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2015-08-18 19:51:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ MODPATH\contest\views\default\footer.php [ 54 ] in :
2015-08-18 19:51:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 19:54:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Common.php [ 97 ] in :
2015-08-18 19:54:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:08:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Common.php [ 97 ] in :
2015-08-18 20:08:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:08:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Common.php [ 97 ] in :
2015-08-18 20:08:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:08:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Common.php [ 97 ] in :
2015-08-18 20:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:08:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Common.php [ 97 ] in :
2015-08-18 20:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:08:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Common.php [ 97 ] in :
2015-08-18 20:08:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:08:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Common.php [ 97 ] in :
2015-08-18 20:08:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:08:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Common.php [ 97 ] in :
2015-08-18 20:08:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:08:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ MODPATH\contest\views\default\footer.php [ 54 ] in :
2015-08-18 20:08:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:09:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ MODPATH\contest\views\default\footer.php [ 54 ] in :
2015-08-18 20:09:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:09:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ MODPATH\contest\views\default\footer.php [ 54 ] in :
2015-08-18 20:09:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 20:09:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth_links ~ APPPATH\classes\Controller\Common.php [ 97 ] in Z:\home\test1.ru\www\application\classes\Controller\Common.php:97
2015-08-18 20:09:36 --- DEBUG: #0 Z:\home\test1.ru\www\application\classes\Controller\Common.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 97, Array)
#1 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\application\classes\Controller\Common.php:97
2015-08-18 20:09:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth_links ~ APPPATH\classes\Controller\Common.php [ 97 ] in Z:\home\test1.ru\www\application\classes\Controller\Common.php:97
2015-08-18 20:09:51 --- DEBUG: #0 Z:\home\test1.ru\www\application\classes\Controller\Common.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 97, Array)
#1 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\application\classes\Controller\Common.php:97
2015-08-18 20:21:00 --- CRITICAL: ErrorException [ 1 ]: Class 'ddd' not found ~ APPPATH\classes\Controller\Common.php [ 97 ] in :
2015-08-18 20:21:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 21:01:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth_data ~ MODPATH\jslogin\classes\Jslogin.php [ 24 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:24
2015-08-18 21:01:45 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 24, Array)
#1 Z:\home\test1.ru\www\application\classes\Controller\Common.php(97): Jslogin::get_links()
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:24
2015-08-18 21:01:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth_data ~ MODPATH\jslogin\classes\Jslogin.php [ 24 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:24
2015-08-18 21:01:55 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 24, Array)
#1 Z:\home\test1.ru\www\application\classes\Controller\Common.php(97): Jslogin::get_links()
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:24
2015-08-18 21:04:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_PAAMAYIM_NEKUDOTAYIM ~ MODPATH\jslogin\classes\Jslogin.php [ 7 ] in :
2015-08-18 21:04:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 21:05:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_PAAMAYIM_NEKUDOTAYIM ~ MODPATH\jslogin\classes\Jslogin.php [ 7 ] in :
2015-08-18 21:05:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 21:05:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_PAAMAYIM_NEKUDOTAYIM ~ MODPATH\jslogin\classes\Jslogin.php [ 7 ] in :
2015-08-18 21:05:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 21:05:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_NEW ~ MODPATH\jslogin\classes\Jslogin.php [ 7 ] in :
2015-08-18 21:05:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 21:05:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ MODPATH\jslogin\classes\Jslogin.php [ 7 ] in :
2015-08-18 21:05:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 21:05:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_NEW ~ MODPATH\jslogin\classes\Jslogin.php [ 7 ] in :
2015-08-18 21:05:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 21:05:28 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Jslogin - assumed 'Jslogin' ~ MODPATH\jslogin\classes\Jslogin.php [ 7 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:7
2015-08-18 21:05:28 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 7, Array)
#1 Z:\home\test1.ru\www\application\classes\Controller\Common.php(97): Jslogin::instance()
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:7
2015-08-18 21:05:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_NEW ~ MODPATH\jslogin\classes\Jslogin.php [ 7 ] in :
2015-08-18 21:05:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-18 21:05:45 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant jslogin - assumed 'jslogin' ~ MODPATH\jslogin\classes\Jslogin.php [ 9 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:9
2015-08-18 21:05:45 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\application\classes\Controller\Common.php(97): Jslogin::instance()
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:9
2015-08-18 21:05:46 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant jslogin - assumed 'jslogin' ~ MODPATH\jslogin\classes\Jslogin.php [ 9 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:9
2015-08-18 21:05:46 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 9, Array)
#1 Z:\home\test1.ru\www\application\classes\Controller\Common.php(97): Jslogin::instance()
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:9
2015-08-18 21:06:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ MODPATH\jslogin\classes\Jslogin.php [ 40 ] in :
2015-08-18 21:06:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :