<?php defined('SYSPATH') or die('No direct script access.');

Route::set('pages_control', 'admin/module/pages(/<action>)')
        ->defaults(array(
            'controller' => 'pagesControl',
            'action' => 'index',
        ))
        ->filter(function($route, $params, $request) {
            if (!method_exists('Controller_PagesControl', 'action_' . $params['action']))
            {
                $params['action'] = 'index';
                return $params;
            }
        });

Route::set('pages', '(<path>)', array('path'=>'.*'))
        ->defaults(array(
            'controller' => 'pages',
            'action' => 'index',
            'path' => '',
        ))
        ->filter(function($route, $params, $request) {
            $page = Pages::getPageByFullUrl($params['path']);

            if (!isset($page)) {
                return false;
            }
            $params['page_id'] = $page->id;
            return $params;
        });