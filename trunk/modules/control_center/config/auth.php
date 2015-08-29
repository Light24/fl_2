<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

        'driver'       => 'File',
        'hash_method'  => 'sha256',
        'hash_key'     => 'psjn1sl;wjsn,l2pxihbn,345zzknsdnas',
        'lifetime'     => 1209600,
        'session_type' => Session::$default,
        'session_key'  => 'auth_user',

        // Username/password combinations for the Auth File driver
        'users' => array(
        //admin - s55vd
			'admin' => '9f17d5c78a7af1392cb5392a0dc1a683c11dfabce3ab93faceaa3104301900de',
        ),

);