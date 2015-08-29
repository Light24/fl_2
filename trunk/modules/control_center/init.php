<?php defined('SYSPATH') or die('No direct script access.');

Route::set('control_center_login', 'admin/login')
        ->defaults(array(
            'controller' => 'controlCenter',
            'action' => 'login',
        ));


Route::set('control_center', 'admin(/<path>)', array('path' => '.*'))
        ->defaults(array(
            'controller' => 'controlCenter',
            'action' => 'index',
            'path' => ''
        ))->filter(function($route, $params, $request) {
            $search = 'module';
            if (substr($params['path'], 0, strlen($search)) == $search)
            {
                return false;
            }
        });

Route::set('control_center_control', 'admin/module/controlcenter(/<action>(/<operation>))')
        ->defaults(array(
            'controller' => 'controlCenter',
            'action' => 'modules',
            'operation' => ''
        ));
