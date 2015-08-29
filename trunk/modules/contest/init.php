<?php

Route::set('profile', 'profile(/<action>)')
        ->defaults(array(
            'controller' => 'profile',
            'action' => 'index',
        )
    );


    Route::set('contest_control', 'admin/module/contest(/<action>(/<overflow>))',array('overflow'=>'.*'))
        ->defaults(array(
            'controller' => 'contestControl',
            'action' => 'index',
        ))
        ->filter(function($route, $params, $request) {
            if (!method_exists('Controller_ContestControl', 'action_' . $params['action']))
            {
                $params['action'] = 'index';
                return $params;
            }
        });
        
/*    Route::set('default3', '(<action>)')
        ->defaults(array(
            'controller' => 'contest',         //cabinet.loyalty.name
            'action' => 'index',
        )
    );*/
    
?>
