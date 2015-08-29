<?
/***************************************** Авторизация через социальные сервесы(vk, facebook, etc) ******************************************/
  Route::set('ModuleJsLogin', 'js_auth.php')
    -> defaults(array(
         'controller' => 'jslogin',
         'action'     => 'js_auth',
    )
  );

  Route::set('ModuleJsRegister', 'js_register.php')
    -> defaults(array(
         'controller' => 'jslogin',
         'action'     => 'js_register',
    )
  );

/*
Route::set('ModuleUsersSendMessageAjax', 'module_users/ajax_send_message')
    ->defaults(array(
        'controller' => 'users',
        'action'     => 'ajax_send_message',
      )
);

Route::set('ModuleUsersPhotoDelete', 'module_users/delete_photo_ajax')
    ->defaults(array(
        'controller' => 'users',
        'action'     => 'delete_photo_ajax',
      )
);/*

?>