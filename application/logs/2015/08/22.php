<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-22 00:36:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: answers ~ MODPATH\users\views\default\user.php [ 189 ] in Z:\home\test1.ru\www\modules\users\views\default\user.php:189
2015-08-22 00:36:32 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\user.php(189): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 189, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(72): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(63): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\user.php:189
2015-08-22 00:37:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: answers ~ MODPATH\users\views\default\user.php [ 192 ] in Z:\home\test1.ru\www\modules\users\views\default\user.php:192
2015-08-22 00:37:00 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\user.php(192): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 192, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(72): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(63): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\user.php:192
2015-08-22 00:39:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: answers ~ MODPATH\users\views\default\user.php [ 192 ] in Z:\home\test1.ru\www\modules\users\views\default\user.php:192
2015-08-22 00:39:10 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\user.php(192): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 192, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(72): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(63): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\user.php:192
2015-08-22 00:40:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: answers ~ MODPATH\users\views\default\user.php [ 191 ] in Z:\home\test1.ru\www\modules\users\views\default\user.php:191
2015-08-22 00:40:38 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\user.php(191): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 191, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(72): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(63): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\user.php:191
2015-08-22 00:40:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: answers ~ MODPATH\users\views\default\user.php [ 192 ] in Z:\home\test1.ru\www\modules\users\views\default\user.php:192
2015-08-22 00:40:50 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\user.php(192): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 192, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(72): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(63): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\user.php:192
2015-08-22 01:47:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\question\init.php [ 33 ] in :
2015-08-22 01:47:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-22 01:54:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\question\init.php [ 31 ] in :
2015-08-22 01:54:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-22 02:44:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH\question\classes\Controller\Question.php [ 205 ] in :
2015-08-22 02:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-22 02:45:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: 

 
    
        
        404 Страница не найдена
        
            * { margin: 0; padding: 0; }
            html, body{ width: 100%; height: 100%; }
            #wrap{ width: 900px; margin: 100px auto 0 auto; }
        
    
    
        
            404 Страница не найдена
        
    
 ~ APPPATH\classes\Controller\Manager.php [ 66 ] in Z:\home\test1.ru\www\application\classes\Controller\Manager.php:66
2015-08-22 02:45:21 --- DEBUG: #0 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 66, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\application\classes\Controller\Manager.php:66
2015-08-22 02:48:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: getBest ~ MODPATH\question\views\default\user_questions.php [ 4 ] in Z:\home\test1.ru\www\modules\question\views\default\user_questions.php:4
2015-08-22 02:48:30 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\user_questions.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 4, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(208): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_user_questions()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(64): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\question\views\default\user_questions.php:4
2015-08-22 23:03:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\question\classes\Controller\Question.php [ 77 ] in :
2015-08-22 23:03:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-22 23:04:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\question\classes\Controller\Question.php [ 77 ] in :
2015-08-22 23:04:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-22 23:25:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ MODPATH\question\views\default\side_right.php [ 38 ] in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:38
2015-08-22 23:25:07 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\side_right.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 38, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(66): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Common.php(124): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#13 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:38
2015-08-22 23:25:08 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\question\classes\Controller\Question.php [ 67 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:67
2015-08-22 23:25:08 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(67): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\test1.r...', 67, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Common.php(124): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:67
2015-08-22 23:26:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ MODPATH\question\views\default\side_right.php [ 38 ] in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:38
2015-08-22 23:26:05 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\side_right.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 38, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(69): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Common.php(124): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#13 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:38
2015-08-22 23:27:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ MODPATH\question\views\default\side_right.php [ 38 ] in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:38
2015-08-22 23:27:35 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\side_right.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 38, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(73): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Common.php(124): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#13 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:38
2015-08-22 23:28:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ MODPATH\question\views\default\side_right.php [ 38 ] in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:38
2015-08-22 23:28:00 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\views\default\side_right.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 38, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(73): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_cats()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Common.php(124): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#13 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\test1.ru\www\modules\question\views\default\side_right.php:38