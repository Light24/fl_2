<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-27 15:39:14 --- EMERGENCY: Exception [ 0 ]: Карта не найдена ~ MODPATH/cabinet/vendor/FXApi/FXAPIClient.php [ 33 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php:35
2013-01-27 15:39:14 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(35): FXAPIClient->call('crm.cabinet.ass...', Object(stdClass))
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Fixprice.php(117): FXAPIConnection->call('crm.cabinet.ass...', Object(stdClass))
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Fixprice->action_assignCard()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fixprice))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php:35
2013-01-27 15:39:33 --- EMERGENCY: Exception [ 0 ]: Карта не найдена ~ MODPATH/cabinet/vendor/FXApi/FXAPIClient.php [ 33 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php:35
2013-01-27 15:39:33 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(35): FXAPIClient->call('crm.cabinet.ass...', Object(stdClass))
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Fixprice.php(117): FXAPIConnection->call('crm.cabinet.ass...', Object(stdClass))
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Fixprice->action_assignCard()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fixprice))
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php:35