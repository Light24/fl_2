<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-30 00:18:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view fixprice/updateProfileBox could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/system/classes/Kohana/View.php:137
2013-01-30 00:18:42 --- DEBUG: #0 /var/www/html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('fixprice/update...')
#1 /var/www/html/system/classes/Kohana/View.php(30): Kohana_View->__construct('fixprice/update...', NULL)
#2 /var/www/html/modules/cabinet/classes/Controller/Fixprice.php(291): Kohana_View::factory('fixprice/update...')
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Fixprice->action_updateProfile()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fixprice))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/system/classes/Kohana/View.php:137
2013-01-30 17:26:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view fixprice/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/system/classes/Kohana/View.php:137
2013-01-30 17:26:22 --- DEBUG: #0 /var/www/html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('fixprice/login')
#1 /var/www/html/system/classes/Kohana/View.php(30): Kohana_View->__construct('fixprice/login', NULL)
#2 /var/www/html/application/classes/Controller/Common.php(72): Kohana_View::factory('fixprice/login')
#3 /var/www/html/modules/cabinet/classes/Controller/Fixprice.php(134): Controller_Common->login()
#4 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Fixprice->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fixprice))
#7 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/system/classes/Kohana/View.php:137
2013-01-30 17:27:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view fixprice/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/system/classes/Kohana/View.php:137
2013-01-30 17:27:25 --- DEBUG: #0 /var/www/html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('fixprice/login')
#1 /var/www/html/system/classes/Kohana/View.php(30): Kohana_View->__construct('fixprice/login', NULL)
#2 /var/www/html/application/classes/Controller/Common.php(72): Kohana_View::factory('fixprice/login')
#3 /var/www/html/modules/cabinet/classes/Controller/Fixprice.php(134): Controller_Common->login()
#4 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Fixprice->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fixprice))
#7 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/system/classes/Kohana/View.php:137