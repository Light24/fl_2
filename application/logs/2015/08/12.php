<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-12 23:07:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH\classes\Controller\Account.php [ 3 ] in :
2015-08-12 23:07:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-12 23:07:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '{' ~ APPPATH\classes\Controller\Account.php [ 3 ] in :
2015-08-12 23:07:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-12 23:07:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '{' ~ APPPATH\classes\Controller\Account.php [ 3 ] in :
2015-08-12 23:07:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-12 23:07:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '{' ~ APPPATH\classes\Controller\Account.php [ 3 ] in :
2015-08-12 23:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-12 23:07:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '{' ~ APPPATH\classes\Controller\Account.php [ 2 ] in :
2015-08-12 23:07:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-08-12 23:09:08 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:09:08 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:09:24 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:09:24 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:09:26 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:09:26 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:10:11 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:10:11 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:10:19 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:10:19 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:10:23 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:10:23 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:11:02 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:11:02 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:11:18 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:11:18 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:48 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:48 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:49 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:49 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:49 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:49 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:50 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:50 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:50 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:50 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:55 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:55 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:56 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:12:56 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:13:33 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:13:33 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:13:46 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:13:46 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:13:47 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:13:47 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:20:00 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137
2015-08-12 23:20:00 --- DEBUG: #0 Z:\home\test1.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 Z:\home\test1.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\system\classes\Kohana\View.php:137