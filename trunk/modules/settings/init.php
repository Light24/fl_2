<?php defined('SYSPATH') or die('No direct script access.');

Route::set('settings_control', 'admin/module/settings(/<action>)')
        ->defaults(array(
            'controller' => 'settingsControl',
            'action' => 'index',
        ));
