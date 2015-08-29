<?php defined('SYSPATH') or die('No direct script access.');

Route::set('users_control', 'admin/module/users(/<action>(/<overflow>))',array('overflow'=>'.*'))
        ->defaults(array(
            'controller' => 'usersControl',
            'action' => 'index',
        ));
