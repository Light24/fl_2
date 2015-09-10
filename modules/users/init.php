<?
  Route::set('ModuleUsersGetUserByID', 'module_users/get_user/<userID>', array('userID' => '[0-9]+'))
    -> defaults(array(
        'controller' => 'users',
        'action'     => 'get_user',
    )
  );

  Route::set('ModuleUsersProfile', 'module_users(/profile)')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'profile',
    )
  );

  Route::set('ModuleUsersProfileMessages', 'module_users/profile/messages')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'messages',
    )
  );

  Route::set('ModuleUsersProfileMessageReply', 'module_users/profile/reply')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'message_reply',
    )
  );

  Route::set('ModuleUsersProfileLogout', 'module_users/profile/logout')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'logout',
    )
  );

  Route::set('ModuleUsersProfileLogin', 'module_users/login(/<type>)')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'login',
    )
  );

  Route::set('ModuleUsersProfileSetting', 'module_users/setting')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'setting',
    )
  );

  Route::set('ModuleUsersProfileSettingEdit', 'module_users/ajax_setting_edit')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'ajax_setting_edit',
    )
  );

  Route::set('ModuleUsersProfileSettingAvatar', 'module_users/photos')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'photos',
    )
  );

  Route::set('ModuleUsersProfileSettingAvatarUpload', 'module_users/upload_avatar')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'ajax_upload_file',
    )
  );

  Route::set('ModuleUsersLeaders', 'module_users/leaders')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'leaders',
    )
  );

  Route::set('ModuleUsersRegistration', 'module_users/registration')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'registration',
    )
  );

  Route::set('ModuleUsersRegistrationSocial', 'module_users/social_registration/<type>')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'social_registration',
    )
  );

  Route::set('ModuleUsersRegistrationConfirmation', 'module_users/confirmation')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'reg_confirmation',
    )
  );

  Route::set('ModuleUsersRegistrationSuccess', 'module_users/registration_success')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'registration_success',
    )
  );


/***************************************** AJAX запросы ******************************************/
  Route::set('ModuleUsersRegistrationTry', 'module_users/ajax_registration')
    -> defaults(array(
         'controller' => 'users',
         'action'     => 'ajax_registration',
    )
  );


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
);

?>