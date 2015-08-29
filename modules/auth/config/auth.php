<?php

defined('SYSPATH') OR die('No direct access allowed.');

return array(
    'driver' => 'ORM', // указываем, что авторизация будет проводиться через ORM
    'hash_method' => 'sha256', // или md5 и т.д. - смотря что больше нравится
    'hash_key' => NULL,
    'lifetime' => 1209600, // время жизни сессии в секундах
    
    'session_type' => Session::$default,//mb ne nujno
    
    'session_key' => 'auth_user', // имя ключа сессии
    // Username/password combinations for the Auth File driver
    'users' => array(
    // 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
    ),
);
