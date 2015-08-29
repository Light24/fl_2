<?
defined('SYSPATH') or die();

return array
       (
         'vk' => array
         (
           'link_auth'              => 'http://oauth.vk.com/authorize',
           'client_id'              => '5037274',
           'client_secret'          =>'QsL7v673BHxvqq2YmjoI',
           'redirect_register_uri'  => 'http://test1.ru/module_users/social_registration/vk',
           'redirect_login_uri'     => 'http://test1.ru/module_users/login/vk',
           'url_token'              => 'https://api.vk.com/oauth/access_token',
         ),

         'fb' => array
         (
           'link_auth'              => 'https://www.facebook.com/dialog/oauth',
           'client_id'              => '444980395688774',
           'client_secret'          => '1f7b179477f2495c1cc14a8bb5bfff63',
           'redirect_register_uri'  => 'http://test1.ru/module_users/social_registration/fb',
           'redirect_login_uri'     => 'http://test1.ru/module_users/login/fb',
           'url_token'              => 'https://graph.Facebook.com/oauth/access_token',
           'url_data'               => 'https://graph.Facebook.com/me',
         ),

         'tw' => array
         (
           'link_auth'              => 'https://api.twitter.com/oauth/authorize',
           'client_id'              => 'EniHN0iLTy3TAfGHn1s0qSLLs',
           'client_secret'          => 'kib7V3JRd9e3BdkT1EvTz4ksqCyLHXOJ9f7l7VKwezu6euCyTj',
           'redirect_register_uri'  => 'http://test1.ru/module_users/social_registration/tw',
           'redirect_login_uri'     => 'http://test1.ru/module_users/login/tw',
           'url_token'              => 'https://api.twitter.com/oauth/request_token',
           'url_access_token'       => 'https://api.twitter.com/oauth/access_token',
           'url_data'               => 'https://api.twitter.com/1.1/users/show.json',
         ),

         'in' => array
         (
           'link_auth'              => 'https://api.instagram.com/oauth/authorize',
           'client_id'              => 'a7dfd47b923d47d38204316d5d5f9f36',
           'client_secret'          => '76bc78a5395541769571ba17d92d25cc',
           'redirect_register_uri'  => 'http://test1.ru/module_users/social_registration/in',
           'redirect_login_uri'     => 'http://test1.ru/module_users/login/in',
           'url_token'              => 'https://api.instagram.com/oauth/access_token',
           'url_data'               => '',
         )
       );

?>