<?php defined('SYSPATH') or die('No direct script access.');

Route::set('elfinder_control', 'admin/module/elfinder(/<action>)')
        ->defaults(array(
            'controller' => 'elfinderControl',
            'action' => 'index',
        ));
