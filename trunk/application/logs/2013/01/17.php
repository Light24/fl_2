<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-17 21:05:25 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(/var/www/clients/client0/web4/web/cardlab/cabinets/application/cache/9e0f23ec69a04f5279332c53fe6e186dsid.txt): failed to open stream: Отказано в доступе ~ MODPATH/cabinet/vendor/FXApi/FXAPIConnection.php [ 27 ] in :
2013-01-17 21:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/client...', 27, Array)
#1 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(27): file_put_contents('/var/www/client...', '6801cf305c5fb9e...')
#2 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/vendor/FXApi/FXAPIConnection.php(34): FXAPIConnection->login()
#3 /var/www/clients/client0/web4/web/cardlab/cabinets/modules/cabinet/classes/Controller/Cabinet.php(489): FXAPIConnection->call('crm.cabinet.Log...', Object(stdClass))
#4 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#7 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client0/web4/web/cardlab/cabinets/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client0/web4/web/cardlab/cabinets/index.php(118): Kohana_Request->execute()
#10 {main} in :