<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-14 01:39:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/profile could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-14 01:39:41 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('default/profile')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('default/profile', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(39): Kohana_View::factory('default/profile')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_profile()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-14 03:02:32 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 52 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:52
2013-01-14 03:02:32 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(52): Kohana_Core::error_handler(2048, 'Only variables ...', '/var/www/client...', 52, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_profile()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:52
2013-01-14 03:02:50 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant URL_PATH - assumed 'URL_PATH' ~ MODPATH/cabinet/views/default/profile.php [ 31 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/profile.php:31
2013-01-14 03:02:50 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/profile.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/client...', 31, Array)
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
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/profile.php:31
2013-01-14 03:47:00 --- EMERGENCY: ReflectionException [ 0 ]: Function password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Validation.php:396
2013-01-14 03:47:00 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('password')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(337): Kohana_Validation->check()
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_changeEmail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Validation.php:396
2013-01-14 03:54:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Session::addFlash() ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 324 ] in :
2013-01-14 03:54:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 05:18:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: islogged ~ MODPATH/cabinet/views/default/header.php [ 8 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/header.php:8
2013-01-14 05:18:18 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/header.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 8, Array)
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
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/header.php:8
2013-01-14 05:18:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: islogged ~ MODPATH/cabinet/views/default/header.php [ 8 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/header.php:8
2013-01-14 05:18:25 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/header.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 8, Array)
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
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/header.php:8
2013-01-14 07:04:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/history could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-14 07:04:33 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('default/history')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('default/history', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(48): Kohana_View::factory('default/history')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_history()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-14 07:17:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/addresses could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-14 07:17:36 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(137): Kohana_View->set_filename('default/address...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php(30): Kohana_View->__construct('default/address...', NULL)
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(49): Kohana_View::factory('default/address...')
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_addresses()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/View.php:137
2013-01-14 07:20:21 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 89 ] in :
2013-01-14 07:20:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 07:21:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ MODPATH/cabinet/views/default/addresses.php [ 2 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/addresses.php:2
2013-01-14 07:21:12 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/addresses.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 2, Array)
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
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/addresses.php:2
2013-01-14 07:21:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function makeSelectElement() ~ MODPATH/cabinet/views/default/addresses.php [ 8 ] in :
2013-01-14 07:21:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 07:27:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: addressNames ~ MODPATH/cabinet/views/default/addresses.php [ 8 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/addresses.php:8
2013-01-14 07:27:17 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/addresses.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 8, Array)
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
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/addresses.php:8
2013-01-14 07:28:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function makeSelectElement() ~ MODPATH/cabinet/views/default/addresses.php [ 10 ] in :
2013-01-14 07:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 07:28:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function makeSelectElement() ~ MODPATH/cabinet/views/default/addresses.php [ 31 ] in :
2013-01-14 07:28:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 07:29:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$addrName ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 77 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:77
2013-01-14 07:29:18 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/client...', 77, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_addresses()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:77
2013-01-14 07:34:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$addrName ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 77 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:77
2013-01-14 07:34:42 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/client...', 77, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_addresses()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:77
2013-01-14 07:39:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 80 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:80
2013-01-14 07:39:17 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(80): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/client...', 80, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_addresses()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php:80
2013-01-14 07:52:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ MODPATH/cabinet/views/default/addresses.php [ 2 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/addresses.php:2
2013-01-14 07:52:32 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/addresses.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 2, Array)
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
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/addresses.php:2
2013-01-14 08:04:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana_View::e() ~ MODPATH/cabinet/views/default/deal.php [ 22 ] in :
2013-01-14 08:04:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 08:15:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: messages ~ MODPATH/cabinet/views/default/deal.php [ 5 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/deal.php:5
2013-01-14 08:15:36 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/deal.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 5, Array)
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
#15 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/deal.php:5
2013-01-14 08:29:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'PHPMailer' not found ~ MODPATH/cabinet/classes/Controller/Cabinet.php [ 53 ] in :
2013-01-14 08:29:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 20:17:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lastName ~ MODPATH/cabinet/views/default/register.php [ 7 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php:7
2013-01-14 20:17:57 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/views/default/register.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 7, Array)
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