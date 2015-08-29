<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-28 00:10:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_data ~ MODPATH\jslogin\classes\Jslogin.php [ 264 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:264
2015-08-28 00:10:09 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(264): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 264, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(142): Jslogin->get_in_user_data('b66d5aeae5d04d4...', Array)
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(165): Controller_Users->registration_social('in', 'b66d5aeae5d04d4...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:264
2015-08-28 00:10:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid_in ~ MODPATH\users\classes\Controller\Users.php [ 204 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:204
2015-08-28 00:10:25 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(204): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 204, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:204
2015-08-28 00:10:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'uid_in' in 'where clause' [ SELECT * FROM users WHERE uid_in = 2148967614 AND confirmed = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-28 00:10:50 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(210): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-28 00:12:36 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'provider_vk' in 'field list' [ INSERT INTO `users` (`fio`, `date_birth`, `city`, `sex`, `email`, `uid_vk`, `uid_fb`, `uid_tw`, `provider_vk`, `provider_fb`, `provider_tw`, `password`, `confirmed`, `photo`, `points`, `last_activity`, `login`) VALUES (' ', '', '', '', '', '', '', '', '', '', '', '', 1, '', 100, '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-28 00:12:36 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(223): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-28 00:14:56 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `users` (`fio`, `date_birth`, `city`, `sex`, `email`, `uid_vk`, `uid_fb`, `uid_tw`, `uid_in`, `provider_tw`, `password`, `confirmed`, `photo`, `points`, `last_activity`, `login`) VALUES (' ', '', '', '', '', '', '', '', '2148967614', '', 1, '', 100, '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-28 00:14:56 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(213): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-28 03:03:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ')' ~ MODPATH\jslogin\classes\Jslogin.php [ 89 ] in :
2015-08-28 03:03:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 03:03:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH\jslogin\classes\Jslogin.php [ 88 ] in :
2015-08-28 03:03:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 03:03:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\jslogin\classes\Jslogin.php [ 86 ] in :
2015-08-28 03:03:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 03:04:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ')' ~ MODPATH\jslogin\classes\Jslogin.php [ 89 ] in :
2015-08-28 03:04:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 03:04:12 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant URL_SEPARATOR - assumed 'URL_SEPARATOR' ~ MODPATH\jslogin\classes\Jslogin.php [ 110 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:110
2015-08-28 03:04:12 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(110): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 110, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#2 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#3 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:110
2015-08-28 03:04:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth_data ~ MODPATH\jslogin\classes\Jslogin.php [ 89 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:89
2015-08-28 03:04:24 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 89, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#2 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#3 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:89
2015-08-28 03:04:34 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant URL_SEPARATOR - assumed 'URL_SEPARATOR' ~ MODPATH\jslogin\classes\Jslogin.php [ 110 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:110
2015-08-28 03:04:34 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(110): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 110, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#2 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#3 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:110
2015-08-28 03:04:45 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant REQUEST_TOKEN_URL - assumed 'REQUEST_TOKEN_URL' ~ MODPATH\jslogin\classes\Jslogin.php [ 110 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:110
2015-08-28 03:04:45 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(110): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 110, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#2 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#3 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:110
2015-08-28 03:05:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ MODPATH\jslogin\classes\Jslogin.php [ 110 ] in :
2015-08-28 03:05:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 03:06:00 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant URL_SEPARATOR - assumed 'URL_SEPARATOR' ~ MODPATH\jslogin\classes\Jslogin.php [ 110 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:110
2015-08-28 03:06:00 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(110): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 110, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#2 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#3 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:110
2015-08-28 03:17:47 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.twitter.com/oauth/request_token?oauth_callback=http%3A%2F%2Ftest1.ru%2Fmodule_users%2Flogin%2Fin&oauth_consumer_key=EniHN0iLTy3TAfGHn1s0qSLLs&oauth_nonce=7a80f778061976c846330856efb28e58&oauth_signature=P%2B1qwJDk0Sh3yk8kSLI0GyzpMyE%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1440716652&oauth_version=1.0) [0function.file-get-contents0]: failed to open stream: HTTP request failed! HTTP/1.0 401 Authorization Required
 ~ MODPATH\jslogin\classes\Jslogin.php [ 124 ] in :
2015-08-28 03:17:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\test1.r...', 124, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(124): file_get_contents('https://api.twi...')
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in :
2015-08-28 03:31:20 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\jslogin\classes\Jslogin.php [ 123 ] in :
2015-08-28 03:31:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\test1.r...', 123, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(123): implode('&', Array)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in :
2015-08-28 11:01:24 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Jslogin::getHTMLPOST(), called in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php on line 125 and defined ~ MODPATH\jslogin\classes\Jslogin.php [ 334 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:334
2015-08-28 11:01:24 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(334): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\test1.r...', 334, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(125): Jslogin->getHTMLPOST('https://api.twi...')
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:334
2015-08-28 11:20:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ MODPATH\jslogin\classes\Jslogin.php [ 110 ] in :
2015-08-28 11:20:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 11:40:19 --- CRITICAL: ErrorException [ 2 ]: implode() expects at most 2 parameters, 3 given ~ MODPATH\jslogin\classes\Jslogin.php [ 112 ] in :
2015-08-28 11:40:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode() expec...', 'Z:\home\test1.r...', 112, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(112): implode('&', 'urlencode', Array)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in :
2015-08-28 11:52:48 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.twitter.com/oauth/request_token?oauth_callback=http%3A%2F%2Ftest1.ru%2Fmodule_users%2Flogin%2Ftw&oauth_consumer_key=EniHN0iLTy3TAfGHn1s0qSLLs&oauth_nonce=7a80f778061976c846330856efb28e58&oauth_signature=QZ0FZKWU%2Bl%2BvSWO55B6WLqBzuAM%3D&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1440716652&oauth_version=1.0) [0function.file-get-contents0]: failed to open stream: HTTP request failed! HTTP/1.0 401 Authorization Required
 ~ MODPATH\jslogin\classes\Jslogin.php [ 130 ] in :
2015-08-28 11:52:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\test1.r...', 130, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(130): file_get_contents('https://api.twi...')
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in :
2015-08-28 11:53:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\jslogin\classes\Jslogin.php [ 130 ] in :
2015-08-28 11:53:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 11:53:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH\jslogin\classes\Jslogin.php [ 130 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:130
2015-08-28 11:53:38 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(130): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 130, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#2 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#3 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:130
2015-08-28 12:08:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\jslogin\classes\Jslogin.php [ 113 ] in :
2015-08-28 12:08:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:09:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\jslogin\classes\Jslogin.php [ 114 ] in :
2015-08-28 12:09:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:09:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\jslogin\classes\Jslogin.php [ 114 ] in :
2015-08-28 12:09:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:09:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_twitter_link() ~ MODPATH\jslogin\classes\Jslogin.php [ 156 ] in :
2015-08-28 12:09:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:09:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\jslogin\classes\Jslogin.php [ 114 ] in :
2015-08-28 12:09:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:10:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\jslogin\classes\Jslogin.php [ 114 ] in :
2015-08-28 12:10:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:10:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\jslogin\classes\Jslogin.php [ 114 ] in :
2015-08-28 12:10:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:10:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\jslogin\classes\Jslogin.php [ 114 ] in :
2015-08-28 12:10:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:11:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: responce ~ MODPATH\jslogin\classes\Jslogin.php [ 93 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:93
2015-08-28 12:11:20 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 93, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(156): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:93
2015-08-28 12:12:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ MODPATH\jslogin\classes\Jslogin.php [ 98 ] in :
2015-08-28 12:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:14:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Session::instnace() ~ MODPATH\jslogin\classes\Jslogin.php [ 117 ] in :
2015-08-28 12:14:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:15:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: responce ~ MODPATH\jslogin\classes\Jslogin.php [ 116 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:116
2015-08-28 12:15:32 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(116): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 116, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(161): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:116
2015-08-28 12:15:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: responce ~ MODPATH\jslogin\classes\Jslogin.php [ 117 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:117
2015-08-28 12:15:57 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(117): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 117, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(162): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:117
2015-08-28 12:15:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: responce ~ MODPATH\jslogin\classes\Jslogin.php [ 117 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:117
2015-08-28 12:15:59 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(117): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 117, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(162): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:117
2015-08-28 12:18:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: oauth_timestamp ~ MODPATH\jslogin\classes\Jslogin.php [ 63 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:63
2015-08-28 12:18:52 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 63, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(161): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:63
2015-08-28 12:21:17 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH\jslogin\classes\Jslogin.php [ 93 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:93
2015-08-28 12:21:17 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(93): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\test1.r...', 93, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(165): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:93
2015-08-28 12:21:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: errors ~ MODPATH\jslogin\classes\Jslogin.php [ 93 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:93
2015-08-28 12:21:23 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(93): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 93, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(165): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:93
2015-08-28 12:22:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH\jslogin\classes\Jslogin.php [ 93 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:93
2015-08-28 12:22:00 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(93): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\test1.r...', 93, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(165): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:93
2015-08-28 12:24:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: code ~ MODPATH\jslogin\classes\Jslogin.php [ 93 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:93
2015-08-28 12:24:20 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(93): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 93, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(161): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:93
2015-08-28 12:24:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_twitter_link() ~ MODPATH\jslogin\classes\Jslogin.php [ 101 ] in :
2015-08-28 12:24:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:26:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: response ~ MODPATH\jslogin\classes\Jslogin.php [ 90 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:90
2015-08-28 12:26:25 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 90, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(165): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:90
2015-08-28 12:27:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW, expecting T_PAAMAYIM_NEKUDOTAYIM ~ MODPATH\jslogin\classes\Jslogin.php [ 92 ] in :
2015-08-28 12:27:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:28:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: errors ~ MODPATH\jslogin\classes\Jslogin.php [ 92 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:92
2015-08-28 12:28:12 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(92): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 92, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(170): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:92
2015-08-28 12:28:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: {"errors" ~ MODPATH\jslogin\classes\Jslogin.php [ 92 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:92
2015-08-28 12:28:31 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(92): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 92, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(170): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:92
2015-08-28 12:28:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: {\"errors\" ~ MODPATH\jslogin\classes\Jslogin.php [ 92 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:92
2015-08-28 12:28:41 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(92): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 92, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(170): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:92
2015-08-28 12:29:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: {"errors": ~ MODPATH\jslogin\classes\Jslogin.php [ 92 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:92
2015-08-28 12:29:37 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(92): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 92, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(170): Jslogin->get_twitter_link(0)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Jslogin->get_links_internal(0)
#3 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#4 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:92
2015-08-28 12:32:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_twitter_link() ~ MODPATH\jslogin\classes\Jslogin.php [ 104 ] in :
2015-08-28 12:32:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:47:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH\jslogin\classes\Jslogin.php [ 212 ] in :
2015-08-28 12:47:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 12:47:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '%' ~ MODPATH\jslogin\classes\Jslogin.php [ 234 ] in :
2015-08-28 12:47:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 13:21:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ MODPATH\jslogin\classes\Jslogin.php [ 234 ] in :
2015-08-28 13:21:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 13:23:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\jslogin\classes\Jslogin.php [ 205 ] in :
2015-08-28 13:23:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 13:27:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH\jslogin\classes\Jslogin.php [ 235 ] in :
2015-08-28 13:27:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 13:41:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH\jslogin\classes\Jslogin.php [ 231 ] in :
2015-08-28 13:41:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 14:08:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\jslogin\classes\Jslogin.php [ 246 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:246
2015-08-28 14:08:19 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(246): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 246, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(358): Jslogin->get_tw_user_id('', NULL)
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(413): Controller_Users->login_social('tw', '')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:246
2015-08-28 14:53:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: target ~ MODPATH\users\views\default\active.php [ 19 ] in Z:\home\test1.ru\www\modules\users\views\default\active.php:19
2015-08-28 14:53:50 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\active.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 19, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(115): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_active()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(71): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_active()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\active.php:19
2015-08-28 14:54:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: target ~ MODPATH\users\views\default\active.php [ 19 ] in Z:\home\test1.ru\www\modules\users\views\default\active.php:19
2015-08-28 14:54:30 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\active.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 19, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(115): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_active()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(71): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_active()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\active.php:19
2015-08-28 14:59:23 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 14:59:23 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_View::factory('')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_show_static_page()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 15:52:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: orderBy ~ MODPATH\question\classes\Controller\Question.php [ 19 ] in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:19
2015-08-28 15:52:32 --- DEBUG: #0 Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 19, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_get_questions()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(38): Kohana_Request->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_question_best()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\www\modules\question\classes\Controller\Question.php:19
2015-08-28 15:55:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: provider_vk ~ MODPATH\users\views\default\user.php [ 116 ] in Z:\home\test1.ru\www\modules\users\views\default\user.php:116
2015-08-28 15:55:37 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\user.php(116): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 116, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(70): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(69): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\user.php:116
2015-08-28 15:57:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: provider_vk ~ MODPATH\users\views\default\user.php [ 116 ] in Z:\home\test1.ru\www\modules\users\views\default\user.php:116
2015-08-28 15:57:00 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\user.php(116): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 116, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(70): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(69): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\user.php:116
2015-08-28 15:58:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: provider_vk ~ MODPATH\users\views\default\user.php [ 116 ] in Z:\home\test1.ru\www\modules\users\views\default\user.php:116
2015-08-28 15:58:22 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\user.php(116): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 116, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(70): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_get_user()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(69): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_id()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\user.php:116
2015-08-28 16:00:37 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 16:00:37 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_View::factory('')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_show_static_page()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 16:01:10 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 16:01:10 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_View::factory('')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_show_static_page()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 16:01:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: answers ~ MODPATH\users\views\default\cabinet.php [ 391 ] in Z:\home\test1.ru\www\modules\users\views\default\cabinet.php:391
2015-08-28 16:01:13 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\cabinet.php(391): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 391, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(469): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_profile()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(98): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_profile()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\cabinet.php:391
2015-08-28 16:05:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: answers ~ MODPATH\users\views\default\cabinet.php [ 387 ] in Z:\home\test1.ru\www\modules\users\views\default\cabinet.php:387
2015-08-28 16:05:54 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\cabinet.php(387): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 387, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(470): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_profile()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(98): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_profile()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\cabinet.php:387
2015-08-28 16:08:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: answers ~ MODPATH\users\views\default\cabinet.php [ 387 ] in Z:\home\test1.ru\www\modules\users\views\default\cabinet.php:387
2015-08-28 16:08:21 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\cabinet.php(387): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 387, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(471): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_profile()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(98): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_profile()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\cabinet.php:387
2015-08-28 16:10:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: provider_vk ~ MODPATH\users\views\default\messages.php [ 38 ] in Z:\home\test1.ru\www\modules\users\views\default\messages.php:38
2015-08-28 16:10:19 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\messages.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 38, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(685): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_messages()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(78): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_messages()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\messages.php:38
2015-08-28 16:13:13 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 16:13:13 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_View::factory('')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_show_static_page()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 17:18:34 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 17:18:34 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_View::factory('')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_show_static_page()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 17:34:54 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 17:34:54 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_View::factory('')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_show_static_page()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 17:35:13 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 17:35:13 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_View::factory('')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_show_static_page()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 20:24:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: psw ~ MODPATH\users\classes\Controller\Users.php [ 515 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:515
2015-08-28 20:24:39 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(515): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 515, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_ajax_setting_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:515
2015-08-28 20:25:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: psw ~ MODPATH\users\classes\Controller\Users.php [ 515 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:515
2015-08-28 20:25:39 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(515): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 515, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_ajax_setting_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:515
2015-08-28 20:26:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: psw ~ MODPATH\users\classes\Controller\Users.php [ 515 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:515
2015-08-28 20:26:26 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(515): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 515, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_ajax_setting_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:515
2015-08-28 20:29:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: psw ~ MODPATH\users\classes\Controller\Users.php [ 516 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:516
2015-08-28 20:29:20 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(516): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 516, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_ajax_setting_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:516
2015-08-28 20:30:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: psw ~ MODPATH\users\classes\Controller\Users.php [ 516 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:516
2015-08-28 20:30:13 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(516): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 516, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_ajax_setting_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:516
2015-08-28 20:30:40 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 1 to be long, string given ~ MODPATH\contest\classes\Controller\Contest.php [ 427 ] in :
2015-08-28 20:30:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'Z:\home\test1.r...', 427, Array)
#1 Z:\home\test1.ru\www\modules\contest\classes\Controller\Contest.php(427): checkdate('', '', '')
#2 [internal function]: Controller_Contest::validateBirthDate(Object(Validation), 'birthDate', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#4 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(546): Kohana_Validation->check()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_ajax_setting_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in :
2015-08-28 20:33:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: regLogin ~ MODPATH\contest\classes\Controller\Contest.php [ 451 ] in Z:\home\test1.ru\www\modules\contest\classes\Controller\Contest.php:451
2015-08-28 20:33:38 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\classes\Controller\Contest.php(451): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 451, Array)
#1 [internal function]: Controller_Contest::loginDouble(Object(Validation), 'editLogin', Array)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(545): Kohana_Validation->check()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_ajax_setting_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\contest\classes\Controller\Contest.php:451
2015-08-28 20:34:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: regLogin ~ MODPATH\contest\classes\Controller\Contest.php [ 451 ] in Z:\home\test1.ru\www\modules\contest\classes\Controller\Contest.php:451
2015-08-28 20:34:31 --- DEBUG: #0 Z:\home\test1.ru\www\modules\contest\classes\Controller\Contest.php(451): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 451, Array)
#1 [internal function]: Controller_Contest::loginDouble(Object(Validation), 'editLogin', Array)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(545): Kohana_Validation->check()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_ajax_setting_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\contest\classes\Controller\Contest.php:451
2015-08-28 20:41:25 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant sex - assumed 'sex' ~ MODPATH\users\classes\Controller\Users.php [ 553 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:553
2015-08-28 20:41:25 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(553): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 553, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_ajax_setting_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:553
2015-08-28 21:15:09 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH\users\views\default\avatar.php [ 8 ] in Z:\home\test1.ru\www\modules\users\views\default\avatar.php:8
2015-08-28 21:15:09 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\views\default\avatar.php(8): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\test1.r...', 8, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(631): Kohana_Response->body(Object(View))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_photos()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(110): Kohana_Request->execute()
#12 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_user_photos()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#15 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\test1.ru\www\modules\users\views\default\avatar.php:8
2015-08-28 21:16:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function hader() ~ MODPATH\users\classes\Controller\Users.php [ 594 ] in :
2015-08-28 21:16:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-28 21:31:37 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-28 21:31:37 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(32): Kohana_View::factory('')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Manager->action_show_static_page()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137