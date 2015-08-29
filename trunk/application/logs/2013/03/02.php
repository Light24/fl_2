<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-02 05:42:54 --- EMERGENCY: Exception [ 0 ]:  malformed ~ MODPATH/cabinet/vendor/FXApi/HTTPClient.php [ 36 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php:24
2013-03-02 05:42:54 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php(24): HTTPClient->request(NULL, '{"email":null,"...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(26): FXAPIClient->call('core.user.Login', Object(stdClass))
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(35): FXAPIConnection->login()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Operator.php(355): FXAPIConnection->call('crm.cabinet.car...', Object(stdClass))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Operator.php(239): Controller_Operator->crmGetCardInfo('211000008', '6114', NULL)
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Operator->action_balance()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Operator))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php:24
2013-03-02 05:43:02 --- EMERGENCY: Exception [ 0 ]:  malformed ~ MODPATH/cabinet/vendor/FXApi/HTTPClient.php [ 36 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php:24
2013-03-02 05:43:02 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php(24): HTTPClient->request(NULL, '{"email":null,"...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(26): FXAPIClient->call('core.user.Login', Object(stdClass))
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(35): FXAPIConnection->login()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Operator.php(355): FXAPIConnection->call('crm.cabinet.car...', Object(stdClass))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Operator.php(239): Controller_Operator->crmGetCardInfo('211000008', '6114', NULL)
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Operator->action_balance()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Operator))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php:24
2013-03-02 05:44:28 --- EMERGENCY: Exception [ 0 ]:  malformed ~ MODPATH/cabinet/vendor/FXApi/HTTPClient.php [ 36 ] in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php:24
2013-03-02 05:44:28 --- DEBUG: #0 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php(24): HTTPClient->request(NULL, '{"email":null,"...')
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(26): FXAPIClient->call('core.user.Login', Object(stdClass))
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(35): FXAPIConnection->login()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Operator.php(356): FXAPIConnection->call('crm.cabinet.car...', Object(stdClass))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Operator.php(239): Controller_Operator->crmGetCardInfo('211000008', '6114', NULL)
#5 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Operator->action_balance()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Operator))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIClient.php:24