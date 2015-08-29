<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-02 16:52:10 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\assets\default\photos ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\OpenServer\domains\konkurs\modules\image\classes\Kohana\Image\GD.php:91
2014-06-02 16:52:10 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('assets/default/...')
#1 C:\OpenServer\domains\konkurs\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('assets/default/...')
#2 C:\OpenServer\domains\konkurs\application\classes\KonkursThumb.php(8): Kohana_Image::factory('assets/default/...')
#3 C:\OpenServer\domains\konkurs\modules\contest\views\default\start.php(247): KonkursThumb::get(NULL, NULL, 225, 130, 1)
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\OpenServer\domains\konkurs\application\views\Common.php(56): Kohana_View->__toString()
#8 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#9 C:\OpenServer\domains\konkurs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#10 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#14 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\konkurs\modules\image\classes\Kohana\Image\GD.php:91