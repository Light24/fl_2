<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-13 01:56:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 01:56:00 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('main')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('main', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('main')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(9): Kohana_Controller_Template->before()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Common->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 01:56:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 01:56:45 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('main')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('main', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('main')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(9): Kohana_Controller_Template->before()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Common->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 02:03:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/Common.php [ 5 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php:5
2013-01-13 02:03:18 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 5, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php:5
2013-01-13 02:03:34 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/Common.php [ 6 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php:6
2013-01-13 02:03:34 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(6): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/client...', 6, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php:6
2013-01-13 02:10:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 02:10:58 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/pages/about')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Static.php(7): Kohana_View::factory('/pages/about')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Static->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 02:11:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 02:11:03 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/pages/about')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Static.php(7): Kohana_View::factory('/pages/about')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Static->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 02:11:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 02:11:50 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/pages/index')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/index', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Index.php(7): Kohana_View::factory('/pages/index')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 02:42:12 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Session::get() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Common.php [ 25 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:25
2013-01-13 02:42:12 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(25): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/client...', 25, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:25
2013-01-13 02:46:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Index.php [ 9 ] in :
2013-01-13 02:46:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 02:50:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Index.php [ 8 ] in :
2013-01-13 02:50:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 03:10:05 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 66 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-01-13 03:10:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/client...', 420, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<action...', 'favicon.ico', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-01-13 03:10:05 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 66 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-01-13 03:10:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/client...', 420, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<action...', 'favicon.ico', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-01-13 05:08:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  cabinet ~ APPPATH/classes/Controller/Common.php [ 42 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:42
2013-01-13 05:08:39 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 42, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(7): Controller_Common->before()
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Actions->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:42
2013-01-13 05:09:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  cabinet ~ APPPATH/classes/Controller/Common.php [ 42 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:42
2013-01-13 05:09:17 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 42, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(7): Controller_Common->before()
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Actions->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:42
2013-01-13 05:09:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  cabinet ~ APPPATH/classes/Controller/Common.php [ 42 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:42
2013-01-13 05:09:18 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 42, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(7): Controller_Common->before()
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Actions->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:42
2013-01-13 05:09:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/Common.php [ 6 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php:6
2013-01-13 05:09:36 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 6, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(42): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(7): Controller_Common->before()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Actions->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php:6
2013-01-13 05:09:36 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Common.php [ 45 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:45
2013-01-13 05:09:36 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(45): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/client...', 45, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(7): Controller_Common->before()
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Actions->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:45
2013-01-13 05:10:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/Common.php [ 6 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php:6
2013-01-13 05:10:03 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 6, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(43): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(7): Controller_Common->before()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Actions->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php:6
2013-01-13 05:10:03 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Common.php [ 46 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:46
2013-01-13 05:10:03 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(46): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/client...', 46, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(7): Controller_Common->before()
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Actions->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php:46
2013-01-13 05:10:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view /

    

        
        
                                
    
    
            
/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:10:42 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/<!DOCTYPE html...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/<!DOCTYPE html...', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(19): Kohana_View::factory('/<!DOCTYPE html...')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view /

    

        
        
                                
    
    
            
/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:07 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/<!DOCTYPE html...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/<!DOCTYPE html...', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(20): Kohana_View::factory('/<!DOCTYPE html...')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view /

    

        
        
                                
    
    
            
/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:09 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/<!DOCTYPE html...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/<!DOCTYPE html...', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(20): Kohana_View::factory('/<!DOCTYPE html...')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view /

    

        
        
                                
    
    
            
/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:10 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/<!DOCTYPE html...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/<!DOCTYPE html...', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(20): Kohana_View::factory('/<!DOCTYPE html...')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view 

    

        
        
                                
    
    
            
/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:18 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('<!DOCTYPE html>...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('<!DOCTYPE html>...', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(20): Kohana_View::factory('<!DOCTYPE html>...')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view /

    

        
        
                                
    
    
            
/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:38 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/<!DOCTYPE html...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/<!DOCTYPE html...', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(20): Kohana_View::factory('/<!DOCTYPE html...')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view /login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:11:53 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/login')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/login', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(20): Kohana_View::factory('/login')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:12:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view /login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:12:57 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/login')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/login', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(21): Kohana_View::factory('/login')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:12:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view /login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:12:59 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/login')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('/login', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(21): Kohana_View::factory('/login')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:15:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:15:19 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('default/login')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('default/login', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(21): Kohana_View::factory('default/login')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:16:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 05:16:08 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('default/login')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('default/login', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Actions.php(21): Kohana_View::factory('default/login')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Actions->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Actions))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 06:24:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:24:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:45:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:45:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:45:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:45:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:46:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:46:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:46:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:46:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:46:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:46:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:46:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:46:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:46:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:46:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:46:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:46:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:46:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:46:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:46:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:48:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:50:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Default::$_session ~ MODPATH/cabinet/classes/Controller/Default.php [ 9 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Default.php:9
2013-01-13 06:50:43 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Default.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/client...', 9, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Default->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Default.php:9
2013-01-13 06:51:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:57:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 10 ] in :
2013-01-13 06:57:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:58:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 13 ] in :
2013-01-13 06:58:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:58:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 13 ] in :
2013-01-13 06:58:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:58:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 13 ] in :
2013-01-13 06:58:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 06:58:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/Common.php [ 13 ] in :
2013-01-13 06:58:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 07:15:13 --- EMERGENCY: ErrorException [ 1 ]: Call to private method Controller_Common::checkAuth() from context 'Controller_Actions' ~ APPPATH/classes/Controller/Actions.php [ 11 ] in :
2013-01-13 07:15:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 07:20:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Default' not found ~ MODPATH/cabinet/classes/Controller/Default.php [ 3 ] in :
2013-01-13 07:20:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 07:45:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view header could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 07:45:26 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('header')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('header', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(9): Kohana_View::factory('header')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Default.php(7): Controller_Cabinet->before()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Default->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 07:45:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view defaultheader could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 07:45:45 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('defaultheader')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('defaultheader', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(9): Kohana_View::factory('defaultheader')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Default.php(8): Controller_Cabinet->before()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Default->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 09:25:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/balance could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 09:25:59 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('default/balance')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('default/balance', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(35): Kohana_View::factory('default/balance')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_balance()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-13 09:30:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ MODPATH/cabinet/views/default/balance.php [ 48 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/balance.php:48
2013-01-13 09:30:55 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/balance.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 48, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/balance.php:48
2013-01-13 09:32:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cardNum ~ MODPATH/cabinet/views/default/balance.php [ 54 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/balance.php:54
2013-01-13 09:32:26 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/balance.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 54, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/balance.php:54
2013-01-13 10:25:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'FXAPIConnection' not found ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 13 ] in :
2013-01-13 10:25:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:28:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'FXAPIConnection' not found ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 14 ] in :
2013-01-13 10:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:28:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'FXAPIConnection' not found ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 14 ] in :
2013-01-13 10:28:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:31:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'FXAPIConnection' not found ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 13 ] in :
2013-01-13 10:31:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:31:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'FXAPIConnection' not found ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 13 ] in :
2013-01-13 10:31:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:31:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'FXAPIConnection' not found ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 13 ] in :
2013-01-13 10:31:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:32:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'FXAPIClient' not found ~ MODPATH/cabinet/vendor/FXApi/FXAPIConnection.php [ 11 ] in :
2013-01-13 10:32:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:33:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'HTTPClient' not found ~ MODPATH/cabinet/vendor/FXApi/FXAPIClient.php [ 3 ] in :
2013-01-13 10:33:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:34:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'HTTPClient' not found ~ MODPATH/cabinet/vendor/FXApi/FXAPIClient.php [ 3 ] in :
2013-01-13 10:34:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:34:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'HTTPClient' not found ~ MODPATH/cabinet/vendor/FXApi/FXAPIClient.php [ 3 ] in :
2013-01-13 10:34:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:35:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'HTTPClient' not found ~ MODPATH/cabinet/vendor/FXApi/FXAPIClient.php [ 3 ] in :
2013-01-13 10:35:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:35:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'HTTPClient' not found ~ MODPATH/cabinet/vendor/FXApi/FXAPIClient.php [ 3 ] in :
2013-01-13 10:35:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:35:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'HTTPClient' not found ~ MODPATH/cabinet/vendor/FXApi/FXAPIClient.php [ 3 ] in :
2013-01-13 10:35:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:37:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'HTTPClient' not found ~ MODPATH/cabinet/vendor/FXApi/FXAPIClient.php [ 3 ] in :
2013-01-13 10:37:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-13 10:37:26 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 4 for FXAPIConnection::__construct(), called in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php on line 15 and defined ~ MODPATH/cabinet/vendor/FXApi/FXAPIConnection.php [ 9 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php:9
2013-01-13 10:37:26 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(9): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/client...', 9, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(15): FXAPIConnection->__construct(NULL, NULL, NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Default.php(8): Controller_Cabinet->before()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Default->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php:9
2013-01-13 10:37:40 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ROOT_PATH - assumed 'ROOT_PATH' ~ MODPATH/cabinet/vendor/FXApi/FXAPIConnection.php [ 15 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php:15
2013-01-13 10:37:40 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/client...', 15, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(15): FXAPIConnection->__construct(NULL, NULL, NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Default.php(8): Controller_Cabinet->before()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Default->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php:15
2013-01-13 10:39:29 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 42 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:42
2013-01-13 10:39:29 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(42): Kohana_Core::error_handler(2048, 'Only variables ...', '/var/www/client...', 42, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_balance()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:42
2013-01-13 10:39:55 --- EMERGENCY: ErrorException [ 2 ]: hash(): Unknown hashing algorithm:  ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 50 ] in :
2013-01-13 10:39:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hash(): Unknown...', '/var/www/client...', 50, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(50): hash('', '')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_balance()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-01-13 10:45:52 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(/var/www/clients/client0/web4/web/cardlab/cabinets/application//cache/tmp/9e0f23ec69a04f5279332c53fe6e186dsid.txt): failed to open stream: Нет такого файла или каталога ~ MODPATH/cabinet/vendor/FXApi/FXAPIConnection.php [ 27 ] in :
2013-01-13 10:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/client...', 27, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(27): file_put_contents('/var/www/client...', '53a0c227bfaea3c...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(34): FXAPIConnection->login()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(55): FXAPIConnection->call('crm.cabinet.car...', Object(stdClass))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_balance()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-01-13 10:46:24 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 58 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:58
2013-01-13 10:46:24 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(58): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/client...', 58, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_balance()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:58
2013-01-13 10:55:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ MODPATH/cabinet/views/default/login.php [ 33 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/login.php:33
2013-01-13 10:55:06 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/login.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 33, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/login.php:33
2013-01-13 12:08:07 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant FXAPI_HASHMETHOD - assumed 'FXAPI_HASHMETHOD' ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 45 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:45
2013-01-13 12:08:07 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(45): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/client...', 45, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_card()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:45
2013-01-13 12:08:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: card ~ MODPATH/cabinet/views/default/card.php [ 24 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/card.php:24
2013-01-13 12:08:39 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/card.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 24, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/card.php:24
2013-01-13 13:25:42 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant URL_PATH - assumed 'URL_PATH' ~ MODPATH/cabinet/views/default/register.php [ 2 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:25:42 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/client...', 2, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:32:13 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant URL_PATH - assumed 'URL_PATH' ~ MODPATH/cabinet/views/default/register.php [ 2 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:32:13 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/client...', 2, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:32:40 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant URL_PATH - assumed 'URL_PATH' ~ MODPATH/cabinet/views/default/register.php [ 2 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:32:40 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/client...', 2, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:32:58 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant URL_PATH - assumed 'URL_PATH' ~ MODPATH/cabinet/views/default/register.php [ 2 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:32:58 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/client...', 2, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:33:00 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant URL_PATH - assumed 'URL_PATH' ~ MODPATH/cabinet/views/default/register.php [ 2 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:33:00 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/client...', 2, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:33:01 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant URL_PATH - assumed 'URL_PATH' ~ MODPATH/cabinet/views/default/register.php [ 2 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:33:01 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/client...', 2, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:2
2013-01-13 13:33:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cardNum ~ MODPATH/cabinet/views/default/register.php [ 3 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:3
2013-01-13 13:33:30 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 3, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:3
2013-01-13 13:36:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lastName ~ MODPATH/cabinet/views/default/register.php [ 6 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:6
2013-01-13 13:36:31 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 6, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:6
2013-01-13 13:40:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: field_iLastName_error ~ MODPATH/cabinet/views/default/register.php [ 7 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:7
2013-01-13 13:40:34 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 7, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:7
2013-01-13 15:32:47 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::regex() ~ SYSPATH/classes/Kohana/Valid.php [ 37 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Valid.php:37
2013-01-13 15:32:47 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Valid.php(37): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/client...', 37, Array)
#1 [internal function]: Kohana_Valid::regex('/^[??-????-?? ,...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(80): Kohana_Validation->check()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Valid.php:37
2013-01-13 15:32:50 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::regex() ~ SYSPATH/classes/Kohana/Valid.php [ 37 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Valid.php:37
2013-01-13 15:32:50 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Valid.php(37): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/client...', 37, Array)
#1 [internal function]: Kohana_Valid::regex('/^[??-????-?? ,...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(80): Kohana_Validation->check()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Valid.php:37
2013-01-13 16:43:43 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Unknown modifier 'g' ~ SYSPATH/classes/Kohana/Valid.php [ 40 ] in :
2013-01-13 16:43:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/var/www/client...', 40, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Valid.php(40): preg_match('/^[??-????-?? ,...', 'sss')
#2 [internal function]: Kohana_Valid::regex('??????', '/^[??-????-?? ,...')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(80): Kohana_Validation->check()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-01-13 16:43:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Unknown modifier 'g' ~ SYSPATH/classes/Kohana/Valid.php [ 40 ] in :
2013-01-13 16:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/var/www/client...', 40, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Valid.php(40): preg_match('/^[??-????-?? ,...', 'sss')
#2 [internal function]: Kohana_Valid::regex('??????', '/^[??-????-?? ,...')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(80): Kohana_Validation->check()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-01-13 16:44:27 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Unknown modifier 'g' ~ SYSPATH/classes/Kohana/Valid.php [ 40 ] in :
2013-01-13 16:44:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/var/www/client...', 40, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Valid.php(40): preg_match('/^[??-????-?? ,...', 'sss')
#2 [internal function]: Kohana_Valid::regex('??????', '/^[??-????-?? ,...')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(80): Kohana_Validation->check()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-01-13 23:13:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: firstName ~ MODPATH/cabinet/views/default/register.php [ 10 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:10
2013-01-13 23:13:07 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 10, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/application/views/Common.php(16): Kohana_View->__toString()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(85): Kohana_Controller_Template->after()
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(87): Controller_Common->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:10