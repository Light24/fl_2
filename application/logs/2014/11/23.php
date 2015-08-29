<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-23 11:48:17 --- CRITICAL: Kohana_Exception [ 0 ]: The specified file, C:/OpenServer/domains/konkurs/modules/captcha/fonts/DejaVuSerif.ttf, was not found. ~ MODPATH\captcha\classes\Captcha.php [ 144 ] in C:\OpenServer\domains\konkurs\modules\captcha\classes\Captcha.php:70
2014-11-23 11:48:17 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\captcha\classes\Captcha.php(70): Captcha->__construct('default')
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Profile.php(119): Captcha::instance()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\captcha\classes\Captcha.php:70