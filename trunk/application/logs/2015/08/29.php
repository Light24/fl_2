<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-29 00:22:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ MODPATH\users\classes\Controller\Users.php [ 34 ] in :
2015-08-29 00:22:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-29 00:22:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ MODPATH\users\classes\Controller\Users.php [ 34 ] in :
2015-08-29 00:22:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-29 13:22:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ MODPATH\users\classes\Controller\Users.php [ 34 ] in :
2015-08-29 13:22:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-29 13:23:00 --- CRITICAL: ErrorException [ 1 ]: Cannot break/continue 1 level ~ MODPATH\question\classes\Controller\Question.php [ 69 ] in :
2015-08-29 13:23:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-29 13:23:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ORDER_BY_DATE ~ MODPATH\question\classes\Controller\Question.php [ 19 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:19
2015-08-29 13:23:23 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 19, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(46): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_get_questions()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:19
2015-08-29 13:25:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ MODPATH\users\classes\Controller\Users.php [ 34 ] in :
2015-08-29 13:25:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-29 16:01:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH\question\classes\Controller\Question.php [ 221 ] in :
2015-08-29 16:01:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :