<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-26 18:48:45 --- EMERGENCY: Exception [ 0 ]: couldn't connect to host ~ MODPATH/cabinet/vendor/FXApi/HTTPClient.php [ 37 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php:24
2013-01-26 18:48:45 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php(24): HTTPClient->request('http://5.9.188....', '{"email":"web_c...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(25): FXAPIClient->call('core.user.Login', Object(stdClass))
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(34): FXAPIConnection->login()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Fixprice.php(117): FXAPIConnection->call('crm.cabinet.ass...', Object(stdClass))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Fixprice->action_assignCard()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fixprice))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php:24
2013-01-26 18:50:00 --- EMERGENCY: Exception [ 0 ]: couldn't connect to host ~ MODPATH/cabinet/vendor/FXApi/HTTPClient.php [ 37 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php:24
2013-01-26 18:50:00 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php(24): HTTPClient->request('http://5.9.188....', '{"email":"web_c...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(25): FXAPIClient->call('core.user.Login', Object(stdClass))
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(34): FXAPIConnection->login()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/application/classes/Controller/Common.php(325): FXAPIConnection->call('crm.cabinet.Inf...', Object(stdClass))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(31): Controller_Common->updateSession()
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Fixprice.php(8): Controller_Cabinet->before()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(69): Controller_Fixprice->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fixprice))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php:24