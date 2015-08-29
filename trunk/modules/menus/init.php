<?php defined('SYSPATH') or die('No direct script access.');

Route::set('menus_edit_menu', 'admin/module/menus/edit_<menu_id>')
        ->defaults(array(
            'controller' => 'menusControl',
            'action' => 'edit_menu',
        ));

Route::set('menus_control', 'admin/module/menus(/<action>)')
        ->defaults(array(
            'controller' => 'menusControl',
            'action' => 'index',
        ));
