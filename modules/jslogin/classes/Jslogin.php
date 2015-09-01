<?
defined('SYSPATH') or die();

class Jslogin
{
  static public function instance()
  {
    static $jslogin = NULL;
    if ($jslogin == NULL)
    {
      $jslogin  = new Jslogin();
      $jslogin->auth_data = Kohana::$config->load('social_login_conf');
    }

    return $jslogin;
  }


  public function get_authorization_links()
  {
    $links = $this->get_links_internal($this->LINK_AUTH_ID);
    return $links;
  }

  public function get_register_links()
  {
    $links = $this->get_links_internal($this->LINK_REGISTER_ID);
    return $links;
  }

  private function get_twitter_link($linkType, $needResetTime = false)
  {
    if ($needResetTime || Session::instance()->get('oauth_nonce') == NULL)
    {
      Session::instance()->set('oauth_nonce', md5(uniqid(rand(), true)));
      Session::instance()->set('oauth_timestamp', time());
    }
    $oauth_nonce     = Session::instance()->get('oauth_nonce');
    $oauth_timestamp = Session::instance()->get('oauth_timestamp');

    $params = array
    (
      'tw' => array
      (
        'oauth_callback='         . urlencode($this->auth_data['tw'][$linkType == $this->LINK_AUTH_ID ? 'redirect_login_uri' : 'redirect_register_uri']),
        'oauth_consumer_key='     . $this->auth_data['tw']['client_id'],
        'oauth_nonce='            . $oauth_nonce,
        'oauth_signature_method=' . 'HMAC-SHA1',
        'oauth_timestamp='        . $oauth_timestamp,
        'oauth_version='          . '1.0'
      ),
    );

    $key =  $this->auth_data['tw']['client_secret'] . '&';
    $oauth_base_text = 'GET' . '&' . urlencode($this->auth_data['tw']['url_token']) . '&' . urlencode(implode('&', $params['tw']));
    $oauth_signature = base64_encode(hash_hmac('sha1', $oauth_base_text, $key, true));

    $url = $this->auth_data['tw']['url_token'] . '?' . implode('&', $params['tw']) . '&' . 'oauth_signature=' . urlencode($oauth_signature);
    $response = $this->getHTML($url);

    if (json_decode($response, true) != NULL)
      $response = json_decode($response, true);
    else
      parse_str($response, $response);

    if (isset($response['errors']))
    {
      switch ($response['errors'][0]['code'])
      {
        case 135:
        {
          $link = NULL;
          if (!$needResetTime)
            $link = $this->get_twitter_link($linkType, true);
          return $link;
          break;
        }
        default:
        {
          return NULL;
          break;
        }
      }
    }

    Session::instance()->set('oauth_token', $response['oauth_token']);
    Session::instance()->set('oauth_token_secret', $response['oauth_token_secret']);

    $link = $this->auth_data['tw']['link_auth'] .'?' . 'oauth_token=' . Session::instance()->get('oauth_token');
    return $link;
  }

  private function get_links_internal($linkType)
  {
    $params = array(
      'vk' => array
      (
        'client_id'     => $this->auth_data['vk']['client_id'],
        'redirect_uri'  => $this->auth_data['vk'][$linkType == $this->LINK_AUTH_ID ? 'redirect_login_uri' : 'redirect_register_uri'],
        'response_type' => 'code'
      ),

      'fb' => array
      (
        'client_id'     => $this->auth_data['fb']['client_id'],
        'redirect_uri'  => $this->auth_data['fb'][$linkType == $this->LINK_AUTH_ID ? 'redirect_login_uri' : 'redirect_register_uri'],
        'response_type' => 'code',
      ),

      'in' => array
      (
        'client_id'     => $this->auth_data['in']['client_id'],
        'redirect_uri'  => $this->auth_data['in'][$linkType == $this->LINK_AUTH_ID ? 'redirect_login_uri' : 'redirect_register_uri'],
        'response_type' => 'code',
      )
    );

    $links['vk'] = $this->auth_data['vk']['link_auth'] .'?' . urldecode(http_build_query($params['vk']));
    $links['fb'] = $this->auth_data['fb']['link_auth'] .'?' . urldecode(http_build_query($params['fb']));

    $links['tw'] = $this->get_twitter_link($linkType);
    $links['in'] = $this->auth_data['in']['link_auth'] .'?' . urldecode(http_build_query($params['in']));

    return $links;
  }


  public function get_vk_user_id($code, &$user_id)
  {
    $params = array(
      'client_id'     => $this->auth_data['vk']['client_id'],
      'client_secret' => $this->auth_data['vk']['client_secret'],
      'redirect_uri'  => $this->auth_data['vk']['redirect_login_uri'],
      'code'          => $code,
      );

    $token = json_decode($this->getHTML($this->auth_data['vk']['url_token'] . '?' . urldecode(http_build_query($params))), true);

    if (!isset($token['user_id']))
      return false;

    $user_id = $token['user_id'];
    return true;
  }


  public function get_fb_user_id($code, &$user_id)
  {
    $params = array(
      'client_id'     => $this->auth_data['fb']['client_id'],
      'client_secret' => $this->auth_data['fb']['client_secret'],
      'redirect_uri'  => $this->auth_data['fb']['redirect_login_uri'],
      'code'          => $code,
      );

    parse_str($this->getHTML($this->auth_data['fb']['url_token'] . '?' . urldecode(http_build_query($params))), $token);
    if (!isset($token['access_token']) )
      return false;

    $token = $token['access_token'];

    $params = array('access_token' => $token);
    $user_data = json_decode($this->getHTML($this->auth_data['fb']['url_data'] . '?' . urldecode(http_build_query($params))), true);

    if (!isset($user_data['id']))
      return false;

    $user_id = $user_data['id'];
    return true;
  }


  public function get_tw_user_id($code, &$user_id)
  {
    $oauth_nonce        = md5(uniqid(rand(), true));
    $oauth_timestamp    = time();
    $oauth_token        = $_GET['oauth_token'];
    $oauth_verifier     = $_GET['oauth_verifier'];

    $params = array
    (
      "oauth_consumer_key=" . $this->auth_data['tw']['client_id'],
      "oauth_nonce=" . $oauth_nonce,
      "oauth_signature_method=HMAC-SHA1",
      "oauth_token=" . $oauth_token,
      "oauth_timestamp=" . $oauth_timestamp,
      "oauth_verifier=" . $oauth_verifier,
      "oauth_version=1.0"
    );

    $key = $this->auth_data['tw']['client_secret'].'&'.Session::instance()->get('oauth_token_secret');
    $oauth_base_text = 'GET' . '&' . urlencode($this->auth_data['tw']['url_token']) . '&' . urlencode(implode('&', $params));
    $oauth_signature = base64_encode(hash_hmac("sha1", $oauth_base_text, $key, true));

    $params = array
    (
      "oauth_nonce=" . $oauth_nonce,
      "oauth_signature_method=HMAC-SHA1",
      "oauth_timestamp=" . $oauth_timestamp,
      "oauth_consumer_key=" . $this->auth_data['tw']['client_id'],
      "oauth_token=" . urlencode($oauth_token),
      "oauth_verifier=" . urlencode($oauth_verifier),
      'oauth_signature='.urlencode($oauth_signature),
      "oauth_version=1.0",
    );


    $url = $this->auth_data['tw']['url_access_token'] . '?' . implode('&', $params);
    $response = $this->getHTML($url);
    parse_str($response, $response);
    if (!isset($response['user_id']))
      return false;

    $user_id = $response['user_id'];
    return true;
  }


  public function get_in_user_id($code, &$user_id)
  {
    $params = array(
      'client_id'     => $this->auth_data['in']['client_id'],
      'client_secret' => $this->auth_data['in']['client_secret'],
      'redirect_uri'  => $this->auth_data['in']['redirect_login_uri'],
      'code'          => $code,
      'grant_type'    => 'authorization_code',
      );

    $token = json_decode($this->getHTMLPOST($this->auth_data['in']['url_token'], urldecode(http_build_query($params))), true);

    if (!isset($token['user']['id']))
      return false;

    $user_id = $token['user']['id'];
    return true;
  }


  public function get_vk_user_data($code, &$userInfo)
  {
    $params = array(
      'client_id'     => $this->auth_data['vk']['client_id'],
      'client_secret' => $this->auth_data['vk']['client_secret'],
      'redirect_uri'  => $this->auth_data['vk']['redirect_register_uri'],
      'code'          => $code,
      );

    $token = json_decode($this->getHTML($this->auth_data['vk']['url_token'] . '?' . urldecode(http_build_query($params))), true);
    if (!isset($token['user_id']))
      return false;
    $user_id = $token['user_id'];

    $params = array(
      'uids'         => $user_id,
      'fields'       => array('uid', 'first_name', 'last_name', 'sex', 'photo_big')
    );

    $data = json_decode(/*file_get_contents*/$this->getHTML('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
    $data = $data['response']['0'];

    $userInfo['login']      = $data['uid'];
    $userInfo['email']      = '';
    $userInfo['uid_vk']     = $data['uid'];
    $userInfo['uid_fb']     = '';
    $userInfo['uid_tw']     = '';
    $userInfo['uid_in']     = '';
    $userInfo['first_name'] = $data['first_name'];
    $userInfo['last_name']  = $data['last_name'];
    $userInfo['sex']        = $data['sex'];
    return true;
  }

  public function get_fb_user_data($code, &$userInfo)
  {
    $params = array(
      'client_id'     => $this->auth_data['fb']['client_id'],
      'client_secret' => $this->auth_data['fb']['client_secret'],
      'redirect_uri'  => $this->auth_data['fb']['redirect_register_uri'],
      'code'          => $code,
      );


    parse_str($this->getHTML($this->auth_data['fb']['url_token'] . '?' . urldecode(http_build_query($params))), $token);
    if (!isset($token['access_token']) )
      return false;

    $params = array
    (
      'access_token' => $token['access_token'],
    );

    $user_data = json_decode($this->getHTML($this->auth_data['fb']['url_data'] . '?' . urldecode(http_build_query($params))), true);
    $name = explode(' ', $user_data['name']);

    if (!isset($user_data['id']))
      return false;

    $userInfo['login']      = $user_data['id'];
    $userInfo['email']      = '';
    $userInfo['uid_vk']     = '';
    $userInfo['uid_fb']     = $user_data['id'];
    $userInfo['uid_tw']     = '';
    $userInfo['uid_in']     = '';
    $userInfo['first_name'] = $name[0];//$user_data['first_name'];
    $userInfo['last_name']  = $name[2];//$user_data['last_name'];
    $userInfo['sex']        = '';// $user_data['sex'];
    return true;

  }


  public function get_tw_user_data($code, &$userInfo)
  {
    $oauth_nonce        = md5(uniqid(rand(), true));
    $oauth_timestamp    = time();
    $oauth_token        = $_GET['oauth_token'];
    $oauth_verifier     = $_GET['oauth_verifier'];

    $params = array
    (
      "oauth_consumer_key=" . $this->auth_data['tw']['client_id'],
      "oauth_nonce=" . $oauth_nonce,
      "oauth_signature_method=HMAC-SHA1",
      "oauth_token=" . $oauth_token,
      "oauth_timestamp=" . $oauth_timestamp,
      "oauth_verifier=" . $oauth_verifier,
      "oauth_version=1.0"
    );

    $key = $this->auth_data['tw']['client_secret'].'&'.Session::instance()->get('oauth_token_secret');
    $oauth_base_text = 'GET' . '&' . urlencode($this->auth_data['tw']['url_token']) . '&' . urlencode(implode('&', $params));
    $oauth_signature = base64_encode(hash_hmac("sha1", $oauth_base_text, $key, true));

    $params = array
    (
      "oauth_nonce=" . $oauth_nonce,
      "oauth_signature_method=HMAC-SHA1",
      "oauth_timestamp=" . $oauth_timestamp,
      "oauth_consumer_key=" . $this->auth_data['tw']['client_id'],
      "oauth_token=" . urlencode($oauth_token),
      "oauth_verifier=" . urlencode($oauth_verifier),
      'oauth_signature='.urlencode($oauth_signature),
      "oauth_version=1.0",
    );


    $url = $this->auth_data['tw']['url_access_token'] . '?' . implode('&', $params);
    $response = $this->getHTML($url);
    parse_str($response, $response);
    if (!isset($response['user_id']))
      return false;


    $userInfo['login']      = $response['user_id'];
    $userInfo['email']      = '';
    $userInfo['uid_vk']     = '';
    $userInfo['uid_fb']     = '';
    $userInfo['uid_tw']     = $response['user_id'];
    $userInfo['uid_in']     = '';
    $userInfo['first_name'] = '';
    $userInfo['last_name']  = '';
    $userInfo['sex']        = '';
    return true;
  }


  public function get_in_user_data($code, &$userInfo)
  {
    $params = array(
      'client_id'     => $this->auth_data['in']['client_id'],
      'client_secret' => $this->auth_data['in']['client_secret'],
      'redirect_uri'  => $this->auth_data['in']['redirect_register_uri'],
      'code'          => $code,
      'grant_type'    => 'authorization_code',
      );

    $userInfo = json_decode($this->getHTMLPOST($this->auth_data['in']['url_token'], urldecode(http_build_query($params))), true);

    if (!isset($userInfo['user']['id']))
      return false;


    $name = explode(' ', $userInfo['user']['full_name']);
    $userInfo['login']      = $userInfo['user']['username'];
    $userInfo['email']      = '';
    $userInfo['uid_vk']     = '';
    $userInfo['uid_fb']     = '';
    $userInfo['uid_tw']     = '';
    $userInfo['uid_in']     = $userInfo['user']['id'];
    $userInfo['first_name'] = $name[0];
    $userInfo['last_name']  = $name[2];
    $userInfo['sex']        = '';// $user_data['sex'];
    return true;
  }

  function getHTML($url)
  {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_HEADER, false);
    //curl_setopt($ch, CURLOPT_CAINFO, 'Z:/usr/local/php5/cacert.pem');
    //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POST, false);

      curl_setopt($ch, CURLOPT_URL, $url);
      //curl_setopt($ch, CURLOPT_REFERER, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      $result = curl_exec($ch);

      curl_close($ch);

      return $result;
  }

  function getHTMLPOST($url, $params)
  {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_HEADER, false);
    //curl_setopt($ch, CURLOPT_CAINFO, 'Z:/usr/local/php5/cacert.pem');
    //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POST, true);

      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
      //curl_setopt($ch, CURLOPT_REFERER, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      $result = curl_exec($ch);

      curl_close($ch);

      return $result;
  }

  private function __construct()
  {

  }

  private $LINK_AUTH_ID = 0, $LINK_REGISTER_ID = 1;
  private $auth_data;
}

?>