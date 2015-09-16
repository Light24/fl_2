<?
defined('SYSPATH') or die();

return array
       (
         'vk' => array
         (
           'link_auth'              => 'http://oauth.vk.com/authorize',
           'client_id'              => '5051125',
           'client_secret'          => '8BUQN3QOM4Z6FaTUk1AS',
           'redirect_register_uri'  => 'http://env-3436019.jelastic.regruhosting.ru/module_users/social_registration/vk',
           'redirect_login_uri'     => 'http://env-3436019.jelastic.regruhosting.ru/module_users/login/vk',
           'url_token'              => 'https://api.vk.com/oauth/access_token',
         ),

         'fb' => array
         (
           'link_auth'              => 'https://www.facebook.com/dialog/oauth',
           'client_id'              => '954305371292231',
           'client_secret'          => '5452825b9895d989a8526f45a20ae860',
           'redirect_register_uri'  => 'http://env-3436019.jelastic.regruhosting.ru/module_users/social_registration/fb',
           'redirect_login_uri'     => 'http://env-3436019.jelastic.regruhosting.ru/module_users/login/fb',
           'url_token'              => 'https://graph.Facebook.com/oauth/access_token',
           'url_data'               => 'https://graph.Facebook.com/me',
         ),

         'tw' => array
         (
           'link_auth'              => 'https://api.twitter.com/oauth/authorize',
           'client_id'              => 'zfxt61M1fA3d3TfECCzGVZWZ2',
           'client_secret'          => 'opnh2n6zqmVSRU5YbYORIU0Y9hWNfHiZCNbrBuTKMikF8WYOtz',
           'redirect_register_uri'  => 'http://env-3436019.jelastic.regruhosting.ru/module_users/social_registration/tw',
           'redirect_login_uri'     => 'http://env-3436019.jelastic.regruhosting.ru/module_users/login/tw',
           'url_token'              => 'https://api.twitter.com/oauth/request_token',
           'url_access_token'       => 'https://api.twitter.com/oauth/access_token',
           'url_data'               => 'https://api.twitter.com/1.1/users/show.json',
         ),

         'in' => array
         (
           'link_auth'              => 'https://api.instagram.com/oauth/authorize',
           'client_id'              => 'bec851870b1e4630bd5b7f622a0e7cda',
           'client_secret'          => '2d23f3f340e947b4a0d34f52ab07f3e3',
           'redirect_register_uri'  => 'http://env-3436019.jelastic.regruhosting.ru/module_users/social_registration/in',
           'redirect_login_uri'     => 'http://env-3436019.jelastic.regruhosting.ru/module_users/login/in',
           'url_token'              => 'https://api.instagram.com/oauth/access_token',
           'url_data'               => '',
         )
       );

?>