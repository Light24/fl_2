<?
/***************************************** Авторизация через социальные сервесы(vk, facebook, etc) ******************************************/
  Route::set('ModuleSocialAuth', 'auth/<social_name>', array('social_name' => '[a-z]{2}'))
    -> defaults(array(
         'controller' => 'jslogin',
         'action'     => 'social_auth',
    )
  );

  Route::set('ModuleSocialRegister', 'registration/<social_name>', array('social_name' => '[a-z]{2}'))
    -> defaults(array(
         'controller' => 'jslogin',
         'action'     => 'social_registration',
    )
  );
?>