<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-27 11:32:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ MODPATH\jslogin\classes\Jslogin.php [ 56 ] in :
2015-08-27 11:32:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 11:33:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: vk ~ MODPATH\jslogin\classes\Jslogin.php [ 51 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:51
2015-08-27 11:33:20 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(51): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 51, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(36): Jslogin->get_links_internal(0)
#2 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#3 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:51
2015-08-27 11:33:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: faceebook ~ MODPATH\jslogin\classes\Jslogin.php [ 64 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:64
2015-08-27 11:33:46 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(64): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 64, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(35): Jslogin->get_links_internal(0)
#2 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#3 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:64
2015-08-27 11:34:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ MODPATH\contest\views\default\footer.php [ 58 ] in :
2015-08-27 11:34:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 11:34:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ MODPATH\contest\views\default\footer.php [ 58 ] in :
2015-08-27 11:34:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 11:34:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ MODPATH\contest\views\default\footer.php [ 58 ] in :
2015-08-27 11:34:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 13:04:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::get() ~ MODPATH\users\classes\Controller\Users.php [ 391 ] in :
2015-08-27 13:04:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 13:06:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function login_vk() ~ MODPATH\users\classes\Controller\Users.php [ 398 ] in :
2015-08-27 13:06:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 13:21:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: code ~ MODPATH\jslogin\classes\Jslogin.php [ 94 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:94
2015-08-27 13:21:24 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 94, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(360): Jslogin->get_facebook_user_id(NULL)
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(416): Controller_Users->login_facebook()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:94
2015-08-27 13:23:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: redirect_login_uri ~ MODPATH\jslogin\classes\Jslogin.php [ 56 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:56
2015-08-27 13:23:40 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 56, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(33): Jslogin->get_links_internal(0)
#2 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin->get_authorization_links()
#3 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:56
2015-08-27 13:24:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function eixt() ~ MODPATH\jslogin\classes\Jslogin.php [ 63 ] in :
2015-08-27 13:24:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 13:52:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\jslogin\classes\Jslogin.php [ 100 ] in :
2015-08-27 13:52:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 14:00:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ MODPATH\jslogin\classes\Jslogin.php [ 108 ] in :
2015-08-27 14:00:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 14:00:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ MODPATH\jslogin\classes\Jslogin.php [ 110 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:110
2015-08-27 14:00:57 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 110, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(360): Jslogin->get_facebook_user_id('AQBJBM2-aYpmNoG...', NULL)
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(417): Controller_Users->login_facebook('AQBJBM2-aYpmNoG...')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:110
2015-08-27 14:05:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ MODPATH\users\classes\Controller\Users.php [ 340 ] in :
2015-08-27 14:05:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 14:08:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Jslogin::get_.facebook._user_id() ~ MODPATH\users\classes\Controller\Users.php [ 341 ] in :
2015-08-27 14:08:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 14:09:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'uid_facebook' in 'where clause' [ SELECT * FROM users WHERE uid_facebook = 1644051279215284 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-27 14:09:25 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(345): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(393): Controller_Users->login_social('facebook', 'AQBfrtAIR_6bT32...')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-27 14:09:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'uid_facebook' in 'where clause' [ SELECT * FROM users WHERE uid_facebook = 1644051279215284 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-27 14:09:30 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(345): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(393): Controller_Users->login_social('facebook', 'AQCVqIDeXEn5NVL...')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-27 14:09:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: access_token ~ MODPATH\jslogin\classes\Jslogin.php [ 102 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:102
2015-08-27 14:09:47 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 102, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(341): Jslogin->get_facebook_user_id('AQCVqIDeXEn5NVL...', NULL)
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(393): Controller_Users->login_social('facebook', 'AQCVqIDeXEn5NVL...')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:102
2015-08-27 14:10:23 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'uid_facebook' in 'where clause' [ SELECT * FROM users WHERE uid_facebook = '1644051279215284' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-27 14:10:23 --- DEBUG: #0 Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(345): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(393): Controller_Users->login_social('facebook', 'AQCf7GPqiFRKYMq...')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2015-08-27 14:28:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: str ~ MODPATH\jslogin\classes\Jslogin.php [ 7 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:7
2015-08-27 14:28:32 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 7, Array)
#1 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin::instance()
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:7
2015-08-27 14:28:46 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant JSON_UNESCAPED_UNICODE - assumed 'JSON_UNESCAPED_UNICODE' ~ MODPATH\jslogin\classes\Jslogin.php [ 7 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:7
2015-08-27 14:28:46 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 7, Array)
#1 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin::instance()
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:7
2015-08-27 14:30:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: n ~ MODPATH\jslogin\classes\Jslogin.php [ 11 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:11
2015-08-27 14:30:52 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 11, Array)
#1 Z:\home\test1.ru\www\application\classes\Controller\Common.php(127): Jslogin::instance()
#2 Z:\home\test1.ru\www\application\classes\Controller\Manager.php(7): Controller_Common->before()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Controller_Manager->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manager))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:11
2015-08-27 15:29:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Jslogin::get_fb_user_id() ~ MODPATH\users\classes\Controller\Users.php [ 341 ] in :
2015-08-27 15:29:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 19:03:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\jslogin\classes\Jslogin.php [ 131 ] in :
2015-08-27 19:03:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 19:06:33 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Controller_Users::registration_social(), called in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php on line 163 and defined ~ MODPATH\users\classes\Controller\Users.php [ 136 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:136
2015-08-27 19:06:33 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(136): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\test1.r...', 136, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(163): Controller_Users->registration_social('vk', '072dd6659c4018e...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:136
2015-08-27 19:06:59 --- CRITICAL: ErrorException [ 2 ]: method_exists() expects exactly 2 parameters, 1 given ~ MODPATH\users\classes\Controller\Users.php [ 139 ] in :
2015-08-27 19:06:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'method_exists()...', 'Z:\home\test1.r...', 139, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(139): method_exists('get_vk_user_dat...')
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(163): Controller_Users->registration_social('vk', 'vk', '072dd6659c4018e...')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in :
2015-08-27 19:16:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH\users\classes\Controller\Users.php [ 139 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:139
2015-08-27 19:16:43 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(139): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 139, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(164): Controller_Users->registration_social('fb', 'AQBPRVJ9fUdoOnJ...', 'AQBPRVJ9fUdoOnJ...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:139
2015-08-27 19:16:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH\users\classes\Controller\Users.php [ 141 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:141
2015-08-27 19:16:48 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 141, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(164): Controller_Users->registration_social('fb', 'AQBPRVJ9fUdoOnJ...', 'AQBPRVJ9fUdoOnJ...')
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:141
2015-08-27 19:19:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first_name ~ MODPATH\jslogin\classes\Jslogin.php [ 162 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:162
2015-08-27 19:19:40 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(162): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 162, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(142): Jslogin->get_fb_user_data('AQBXzcblN5WTMh1...', '?QBXzcblN5WTMh1...')
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(163): Controller_Users->registration_social('fb', 'AQBXzcblN5WTMh1...', '?QBXzcblN5WTMh1...')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:162
2015-08-27 19:19:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH\users\classes\Controller\Users.php [ 177 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:177
2015-08-27 19:19:58 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(177): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 177, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:177
2015-08-27 19:20:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: where ~ MODPATH\users\classes\Controller\Users.php [ 193 ] in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:193
2015-08-27 19:20:40 --- DEBUG: #0 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(193): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 193, Array)
#1 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_social_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php:193
2015-08-27 21:24:34 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant authorization_code - assumed 'authorization_code' ~ MODPATH\jslogin\classes\Jslogin.php [ 176 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:176
2015-08-27 21:24:34 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(176): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\test1.r...', 176, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(376): Jslogin->get_in_user_id('18a3527581ab4d5...', NULL)
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(431): Controller_Users->login_social('in', '18a3527581ab4d5...')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:176
2015-08-27 21:30:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: token ~ MODPATH\jslogin\classes\Jslogin.php [ 181 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:181
2015-08-27 21:30:05 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(181): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 181, Array)
#1 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(376): Jslogin->get_in_user_id('3079ab2e1a704a2...', NULL)
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(431): Controller_Users->login_social('in', '3079ab2e1a704a2...')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:181
2015-08-27 21:52:33 --- CRITICAL: ErrorException [ 2 ]: curl_errno() expects parameter 1 to be resource, boolean given ~ MODPATH\jslogin\classes\Jslogin.php [ 256 ] in :
2015-08-27 21:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_errno() ex...', 'Z:\home\test1.r...', 256, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(256): curl_errno(false)
#2 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(179): Jslogin->getHTML('https://api.ins...')
#3 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(376): Jslogin->get_in_user_id('7a83ef5c84d8460...', NULL)
#4 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(431): Controller_Users->login_social('in', '7a83ef5c84d8460...')
#5 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in :
2015-08-27 23:14:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_file_contents() ~ MODPATH\jslogin\classes\Jslogin.php [ 179 ] in :
2015-08-27 23:14:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 23:15:07 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.instagram.com/oauth/access_token?client_id=a7dfd47b923d47d38204316d5d5f9f36&client_secret=76bc78a5395541769571ba17d92d25cc&redirect_uri=http://test1.ru/module_users/login/in&code=61b6d8cdd8d3409e8f7caae7483af02b&grant_type=authorization_code) [0function.file-get-contents0]: failed to open stream: HTTP request failed! HTTP/1.1 405 METHOD NOT ALLOWED
 ~ MODPATH\jslogin\classes\Jslogin.php [ 179 ] in :
2015-08-27 23:15:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\test1.r...', 179, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(179): file_get_contents('https://api.ins...')
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(376): Jslogin->get_in_user_id('61b6d8cdd8d3409...', NULL)
#3 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(432): Controller_Users->login_social('in', '61b6d8cdd8d3409...')
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2015-08-27 23:15:10 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.instagram.com/oauth/access_token?client_id=a7dfd47b923d47d38204316d5d5f9f36&client_secret=76bc78a5395541769571ba17d92d25cc&redirect_uri=http://test1.ru/module_users/login/in&code=f6b139c32d044ff1b80b9f9b73a0db69&grant_type=authorization_code) [0function.file-get-contents0]: failed to open stream: HTTP request failed! HTTP/1.1 405 METHOD NOT ALLOWED
 ~ MODPATH\jslogin\classes\Jslogin.php [ 179 ] in :
2015-08-27 23:15:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\test1.r...', 179, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(179): file_get_contents('https://api.ins...')
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(376): Jslogin->get_in_user_id('f6b139c32d044ff...', NULL)
#3 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(432): Controller_Users->login_social('in', 'f6b139c32d044ff...')
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2015-08-27 23:21:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: process ~ MODPATH\jslogin\classes\Jslogin.php [ 250 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:250
2015-08-27 23:21:58 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(250): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 250, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(179): Jslogin->getHTML('https://api.ins...')
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(376): Jslogin->get_in_user_id('b7ec4f8a67fb479...', NULL)
#3 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(432): Controller_Users->login_social('in', 'b7ec4f8a67fb479...')
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:250
2015-08-27 23:48:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/' ~ MODPATH\jslogin\classes\Jslogin.php [ 257 ] in :
2015-08-27 23:48:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-27 23:53:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: curl ~ MODPATH\jslogin\classes\Jslogin.php [ 251 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:251
2015-08-27 23:53:06 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(251): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 251, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(178): Jslogin->getHTML('https://api.ins...')
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(376): Jslogin->get_in_user_id('22c1260bc8d44be...', NULL)
#3 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(432): Controller_Users->login_social('in', '22c1260bc8d44be...')
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:251
2015-08-27 23:55:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: curl ~ MODPATH\jslogin\classes\Jslogin.php [ 256 ] in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:256
2015-08-27 23:55:14 --- DEBUG: #0 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(256): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 256, Array)
#1 Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php(178): Jslogin->getHTML('https://api.ins...')
#2 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(376): Jslogin->get_in_user_id('df7120c3030140a...', NULL)
#3 Z:\home\test1.ru\www\modules\users\classes\Controller\Users.php(432): Controller_Users->login_social('in', 'df7120c3030140a...')
#4 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\modules\jslogin\classes\Jslogin.php:256