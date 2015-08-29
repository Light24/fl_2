<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-12 05:40:57 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/clients/client0/web4/web/sergy/raspisanie/system/classes/Kohana/Cookie.php:67
2013-01-12 05:40:57 --- DEBUG: #0 /var/www/clients/client0/web4/web/sergy/raspisanie/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('CLIENTID', NULL)
#1 /var/www/clients/client0/web4/web/sergy/raspisanie/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('CLIENTID')
#2 /var/www/clients/client0/web4/web/sergy/raspisanie/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/clients/client0/web4/web/sergy/raspisanie/system/classes/Kohana/Cookie.php:67
2013-01-12 05:40:58 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/clients/client0/web4/web/sergy/raspisanie/system/classes/Kohana/Cookie.php:67
2013-01-12 05:40:58 --- DEBUG: #0 /var/www/clients/client0/web4/web/sergy/raspisanie/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('CLIENTID', NULL)
#1 /var/www/clients/client0/web4/web/sergy/raspisanie/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('CLIENTID')
#2 /var/www/clients/client0/web4/web/sergy/raspisanie/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/clients/client0/web4/web/sergy/raspisanie/system/classes/Kohana/Cookie.php:67