<?
/*
        id
        date_birth
        fio
        date_birth
        city
        sex
        email
        uid_vk
        uid_fb
        uid_tw
        uid_in

        confirmed
        photo
        points
        last_activity
        login
*/
class Controller_Users extends Controller
{
  public function before()
  {
    // мешает работе загрузчику новых фотографий
    /*if (!Request::initial()->is_ajax())
      if (Request::current()->is_initial())
        die('Access denied.');*/
    parent::before();
  }

  public function action_get_user()
  {
    $userID = intval($this->request->param('userID', 0));
    $queryResult = DB::select()->from('users')->where('id', '=', $userID)->execute()->as_array();

    if (count($queryResult) == 1)
    {
        $profile = $queryResult[0];
    }
    else
    {
        header( 'Location: ' . URL::base() . '' ) ; die();
    }

    //print_r(Auth::instance()->get_user());
    //$this->template->pageTitle = 'Результат поиска';
    $this->response->body(View::factory('default/user', array(
                'profile'           => $profile,
                'user'              => Session::instance()->get('user'),)));
  }

  private function get_leaders_by_select_cats($conditions, $sort_type)
  {
    if (isset($conditions['cid']) && $conditions['cid']['value'] > 0)
      $where = ' question.contest_id = ' . $conditions['cid']['value'];

    if (isset($conditions['durations_cats']) && strcmp($conditions['durations_cats']['value'], 'week') == 0)
      $where = (isset($where) ? $where . ' AND ' : '') . ' question.date_post >= (NOW() - TIME_TO_SEC(\'24:00:00\') * 7) ';

    $where = (isset($where) ? ' WHERE ' . $where : '');

    switch ($sort_type)
    {
      case 'questions':
      {
        $users = DB::query(Database::SELECT, "SELECT user.id,user.photo, user.fio,user.login, 
                                               count(question.id) as qnt FROM `users` user 
                                               LEFT JOIN `question` question ON user.id=question.user_id " . $where . "
                                               group by user.id ORDER BY qnt DESC LIMIT 6")->execute()->as_array();
        break;
      }
      case 'answers':
      {
        $users = DB::query(Database::SELECT, 'SELECT user.id,user.photo, user.fio,user.login, 
                                              (count(answers_yes.work_id) + count(answers_no.work_id)) as qnt FROM `users` user 
                                              LEFT JOIN `question` question ON user.id=question.user_id
                                              LEFT JOIN `answers_no` answers_no ON answers_no.work_id=question.id
                                              LEFT JOIN `answers_yes` answers_yes ON answers_yes.work_id=question.id ' . $where . '
                                              group by user.id ORDER BY qnt DESC LIMIT 6')->execute()->as_array();
        break;
      }
      case 'points':
      default:
      {
        $users = DB::query(Database::SELECT, 'SELECT user.id,user.photo, user.fio,user.login, 
                                               user.points as qnt FROM `users` user 
                                               LEFT JOIN `question` question ON user.id=question.user_id ' . $where . ' group by user.id
                                               ORDER BY qnt DESC LIMIT 6')->execute()->as_array();
        break;
      }
    }
    self::set_full_avatar_list_path($users);
    return $users;
  }


  public function action_leaders()
  {
    $sort_type     = htmlspecialchars(Request::initial()->param('sort_type', 'points'), ENT_NOQUOTES);
    $duration_type = htmlspecialchars(Request::initial()->param('duration_type', 'all'), ENT_NOQUOTES);
    $cid           = intval(Request::initial()->param('catID'));

    $conditions = array();
    $conditions['durations_cats']['value'] = $duration_type;
    $conditions['cid']['value']            = $cid;

    $users = $this->get_leaders_by_select_cats($conditions, $sort_type);

    //$this->template->pageTitle = 'Лидеры';
    $this->response->body(View::factory('default/leaders', array(
                'users'           => $users,
                'select_category' => $sort_type,
                'cid'             => $cid,
                'duration_type'   => $duration_type
    )));
  }

  public function action_registration()
  {

    $userData['fio'] = htmlspecialchars(Arr::get($_POST, 'regFio'), ENT_NOQUOTES);
    $userData['login'] = htmlspecialchars(Arr::get($_POST, 'regLogin'), ENT_NOQUOTES);
    $userData['birth_day'] = htmlspecialchars(Arr::get($_POST, 'regBirthDay'), ENT_NOQUOTES);
    $userData['birth_month'] = htmlspecialchars(Arr::get($_POST, 'regBirthMonth'), ENT_NOQUOTES);
    $userData['birth_year'] = htmlspecialchars(Arr::get($_POST, 'regBirthYear'), ENT_NOQUOTES);
    $userData['birth_date'] = $userData['birth_year'] . '-' . $userData['birth_month'] . '-' . $userData['birth_day'];
    $userData['city'] = htmlspecialchars(Arr::get($_POST, 'regCity'), ENT_NOQUOTES);
    $userData['sex'] = htmlspecialchars(Arr::get($_POST, 'regSex'), ENT_NOQUOTES);
    $userData['regPhoto'] = htmlspecialchars(Arr::get($_POST, 'regPhoto'), ENT_NOQUOTES);

    $userData['email']   = htmlspecialchars(Arr::get($_POST, 'regEmail'), ENT_NOQUOTES);

    //$this->template->pageTitle = 'Регистрация';
    $this->response->body(View::factory('default/registration', array('userData' => $userData)));
  }


  public function action_registration_success()
  {
    $this->response->body(View::factory('default/registration_success'));
  }

  private function registration_social($prefix, $code, &$data)
  {
    $registerMethod = 'get_' . $prefix . '_user_data';
    if (!method_exists(Jslogin::instance(), $registerMethod))
      return false;

    $result = Jslogin::instance()->$registerMethod($code, $data);
    if (!$result)
      return false;
   return true;
  }

  public function action_social_registration()
  {
    if (self::action_checkout())
    {
        header( 'Location: ' . URL::base() . '' ) ; die();
    }

    $userType = htmlspecialchars(Request::initial()->param('type'), ENT_QUOTES);

    switch ($userType)
    {
      case 'vk':
      case 'fb':
      case 'tw':
      case 'in':
      {
        $code = (isset($_GET['code'])) ? $_GET['code'] : '';
        $result = $this->registration_social($userType, $code, $data);

        if (!$result)
        {
          header( 'Location: ' . URL::base() . 'user/registration' ) ; die();
        }

        break;
      }
      default:
      {
        header( 'Location: ' . URL::base() . 'user/registration' ) ; die();
        break;
      }
    }
    $fio           = $data['first_name'] . ' ' . $data['last_name'];
    $birth_date    = NULL;
    $city          = '';
    $sex           = $data['sex'];
    $email         = $data['email'];
    $uid_vk        = $data['uid_vk'];
    $uid_fb        = $data['uid_fb'];
    $uid_tw        = $data['uid_tw'];
    $uid_in        = $data['uid_in'];
    $reg_psw       ='';
    $regPhoto      = '';
    $last_activity = '';
    $login         = $data['login'];

    if ($data['uid_vk'] != '')
      $where = 'uid_vk = ' . $uid_vk;
    else if ($data['uid_fb'] != '')
      $where = 'uid_fb = ' . $uid_fb;
    else if ($data['uid_tw'] != '')
      $where = 'uid_tw = ' . $uid_tw;
    else if ($data['uid_in'] != '')
      $where = 'uid_in = ' . $uid_in;
    else
    {
      header( 'Location: ' . URL::base() . '' ) ; die();
    }

    $queryResult =  DB::query(Database::SELECT, "SELECT * FROM users WHERE " . $where . " AND confirmed = 1")->execute()->as_array();
    if (count($queryResult) == 0)
    {
      DB::insert('users', array('fio', 'date_birth', 'city', 'sex',
                  'email', 'uid_vk', 'uid_fb', 'uid_tw', 'uid_in',
                  'password', 'confirmed', 'photo', 'points',
                  'last_activity', 'login'
              ))
              ->values(array($fio, $birth_date, $city, $sex,
                  $email, $uid_vk, $uid_fb, $uid_tw, $uid_in,
                  $reg_psw, 1, $regPhoto, 100, $last_activity, $login))
              ->execute();

      $last_item = DB::select(array(DB::expr("LAST_INSERT_ID()"), "ID"))->execute()->get('ID');
      $hash = strtolower(Text::random('alnum', 20)) . date("Y-m-d-H:i:s");
      $query = DB::insert('conrol_hash', array('hash', 'user_id'))->values(array($hash, $last_item))->execute();

      $queryResult = DB::query(Database::SELECT, "SELECT * FROM users WHERE " . $where . " AND confirmed = 1")->execute()->as_array();
      if (count($queryResult) == 0)
      {
        header( 'Location: ' . URL::base() . '' ) ; die();
      }
    }
    $this->updateSession($queryResult[0]);
    header( 'Location: ' . URL::base() . '' ) ; die();
  }


  public function action_ajax_registration()
  {
    $regPhoto = '';

    $fio = htmlspecialchars(Arr::get($_POST, 'regFio'), ENT_NOQUOTES);
    $login = htmlspecialchars(Arr::get($_POST, 'regLogin'), ENT_NOQUOTES);
    $birth_day = htmlspecialchars(Arr::get($_POST, 'regBirthDay'), ENT_NOQUOTES);
    $birth_month = htmlspecialchars(Arr::get($_POST, 'regBirthMonth'), ENT_NOQUOTES);
    $birth_year = htmlspecialchars(Arr::get($_POST, 'regBirthYear'), ENT_NOQUOTES);
    $birth_date = $birth_year . '-' . $birth_month . '-' . $birth_day;
    $city = htmlspecialchars(Arr::get($_POST, 'regCity'), ENT_NOQUOTES);
    $sex = htmlspecialchars(Arr::get($_POST, 'regSex'), ENT_NOQUOTES);
    $regPhoto = htmlspecialchars(Arr::get($_POST, 'regPhoto'), ENT_NOQUOTES);

    if ($sex == '1')
        $sex = 'мужской';
    else
        $sex = 'женский';

    $email   = htmlspecialchars(Arr::get($_POST, 'regEmail'), ENT_NOQUOTES);
    $reg_psw = md5(htmlspecialchars(Arr::get($_POST, 'regPsw'), ENT_NOQUOTES));

    $_POST['birthDate'] = $birth_date;
    $last_activity = date("Y-m-d H:i:s");
    $post = Validation::factory($_POST);
    $post->rule('regFio', 'not_empty')
            ->rule('regFio', 'regex', array(':value', '/\p{Cyrillic}/u'))
            ->rule('regLogin', 'not_empty')
            ->rule('regLogin', 'Controller_Contest::loginDouble', array(':validation', ':field', ':data'))
            ->rule('regBirthDay', 'not_empty')
            ->rule('regBirthDay', 'numeric')
            ->rule('regBirthMonth', 'not_empty')
            ->rule('regBirthMonth', 'numeric')
            ->rule('regBirthYear', 'not_empty')
            ->rule('regBirthYear', 'numeric')
            ->rule('regCity', 'not_empty')
            ->rule('regCity', 'regex', array(':value', '/\p{Cyrillic}/u'))
            ->rule('regSex', 'not_empty')
            ->rule('regPsw', 'not_empty')
            ->rule('regPsw', 'min_length', array(':value', 6))
            ->rule('birthDate', 'Controller_Contest::validateBirthDate', array(':validation', ':field', ':data'))
            ->rule('regEmail', 'Controller_Contest::emailDouble', array(':validation', ':field', ':data'))
            ->rule('regEmail', 'email');

    //Если валидация успешна
    if ($post->check())
    {
        $result = DB::insert('users', array('fio', 'date_birth', 'city', 'sex',
                    'email', 'uid_vk', 'uid_fb', 'uid_tw', 'uid_in',
                    'password', 'confirmed', 'photo', 'points',
                    'last_activity', 'login'
                ))
                ->values(array($fio, $birth_date, $city, $sex,
                    $email, '', '', '', '',
                    $reg_psw, 0, $regPhoto, 100, $last_activity, $login))
                ->execute();
        $last_item = DB::select(array(DB::expr("LAST_INSERT_ID()"), "ID"))->execute()->get('ID');
        $hash = strtolower(Text::random('alnum', 20)) . date("Y-m-d-H:i:s");
        $query = DB::insert('conrol_hash', array('hash', 'user_id'))->values(array($hash, $last_item))->execute();

        if ($sex == 'мужской')
            $target = 'Уважаемый';
        else
            $target = 'Уважаемая ';
        $message = $target . ' <b>' . $fio . '</b>! <br/>
        Благодарим Вас за регистрацию на сайте <a target="_blank" http://' . $_SERVER['SERVER_NAME'] . ' >' . $_SERVER['SERVER_NAME'] . '</a><br/>
        Для завершения регистрации, пожалуйста, пройдите по этой ссылке:
        <a target="_blank" href="http://' . $_SERVER['SERVER_NAME'] . '/module_users/confirmation?id=' . $last_item . '&hash=' . $hash . '"> подтверждение регистрации</a>
        <br/><br/>
        Если ссылка не активна, то скопируйте в адресную строку браузера этот текст:
        http://' . $_SERVER['SERVER_NAME'] . '/module_users/confirmation?id=' . $last_item . '&hash=' . $hash . '<br/>
        ';

        $this->sendEmail('Регистрация', $message, $fio, $email);
        $_SESSION['endReg'] = 1;
        $output['success'] = true;
        $output['message'] = 'ok';
    } else {
        $errors = $post->errors(true);
        $output['success'] = false;
        $output['message'] = implode(";  ", $errors);
    }
    $output = json_encode($output);
    $this->response->body($output);
  }

  public function action_reg_confirmation()
  {
    $uid = (int) htmlspecialchars((Arr::get($_GET, 'id')), ENT_NOQUOTES);
    $hash = htmlspecialchars((Arr::get($_GET, 'hash')), ENT_NOQUOTES);

    if (($uid != '') && ($hash != ''))
    {
        $verfifcationHash = DB::select()->from('conrol_hash')
                        ->where("user_id", "=", $uid)->execute()->get('hash');

        if ($hash === $verfifcationHash)
        {
            $userUpgrade = DB::update('users')->set(array('confirmed' => 1))
                            ->where('id', '=', $uid)->execute();

            $query = DB::select()->from('users')->where("id", '=', $uid)->limit(1)->execute();

            if (count($query) == 1)
            {
              $this->updateSession($query[0]);
            }

            DB::delete('conrol_hash')->where('user_id', '=', $uid)
                    ->where('hash', '=', $hash)
                    ->execute();


          header( 'Location: ' . URL::base() . 'user/profile' ) ; die();
        }
        else
        {
          header( 'Location: ' . URL::base() . '' ) ; die();
        }
    }
    else
    {
        header( 'Location: ' . URL::base() . '' ) ; die();
    }
  }



  private function sendEmail($theme, $message, $from, $email)
  {
      require Kohana::find_file('vendor', 'PHPMailer');

      $sendMail = new PHPMailer();
      $sendMail->IsSMTP();
      $sendMail->SMTPDebug = 1;
      $sendMail->SMTPAuth = true;
      $sendMail->Host = "mail.ukraine.com.ua"; // SMTP servers
      $sendMail->Port = 25; // SMTP servers
      $sendMail->Username = "vergelis@it-industry.com.ua"; // SMTP username
      $sendMail->Password = "bientrinqaz232";
      $sendMail->IsHTML(true); // send as HTML
      $sendMail->SetFrom('vergelis@it-industry.com.ua', $from);
      $sendMail->AddAddress($email, $from);
      $sendMail->Subject = $theme;
      $sendMail->Body = $message;


      //отправка письма
      if (!$sendMail->Send()) {//если письмо не отправлено - выводим ошибку
          $output['success'] = false;
          $output['message'] = $sendMail->ErrorInfo;

          return false;
      } else {
          $output['success'] = true;
          $output['message'] = 'ok';

          return true;
      }
  }


  private function login_social($prefix, $code)
  {
    if (self::action_checkout())
    {
        header( 'Location: ' . URL::base() . '' ) ; die();
    }

    $loginMethod = 'get_' . $prefix . '_user_id';
    
    if (method_exists(Jslogin::instance(), $loginMethod))
    {
      $result = Jslogin::instance()->$loginMethod($code, $uid);
      if ($result)
      {
        $queryResult = DB::query(Database::SELECT, "SELECT * FROM users WHERE uid_$prefix = '" . $uid . "'")->execute()->as_array();

        if (count($queryResult) == 1)
        {
          $this->updateSession($queryResult[0]);
          header( 'Location: ' . URL::base()) ; die();
          return;
        }
      }
    }

    header( 'Location: ' . URL::base() . 'user/registration' ) ; die();
  }


  private function login_standart($email, $password, &$output)
  {
    $password = md5($password);
    $queryResult = DB::query(Database::SELECT, "SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . $password . "' AND confirmed = 1");
    $queryResult = $queryResult->execute()->as_array();

    if (count($queryResult) == 1)
    {
      $this->updateSession($queryResult[0]);
      $output['success'] = true;
      $output['message'] = 'ok';
    }
    else
    {
      $output['success'] = false;
      $output['message'] = 'Неверный логин или пароль';
    }
  }


  public function action_login()
  {
    if (self::action_checkout())
    {
        header( 'Location: ' . URL::base() . '' ) ; die();
    }
    $userType = htmlspecialchars(Request::initial()->param('type'), ENT_QUOTES);

    switch ($userType)
    {
      case 'vk':
      case 'fb':
      case 'tw':
      case 'in':
      {
        $code = (isset($_GET['code'])) ? $_GET['code'] : '';
        $this->login_social($userType, $code);
        break;
      }
      default:
      {
        $email = htmlspecialchars(Arr::get($_POST, 'emailLogin'), ENT_NOQUOTES);
        $password = htmlspecialchars(Arr::get($_POST, 'passwordLogin'), ENT_NOQUOTES);

        $this->login_standart($email, $password, $output);

        $output = json_encode($output);
        $this->response->body($output);
        break;
      }
    }


    //if (!Request::initial()->is_ajax())
    //  return;
  }


  public function action_profile()
  {
    if (!self::action_checkout())
    {
        HTTP::redirect("/registration"); die();
    }
    /*$this->template->pageTitle = 'Личный кабинет';

    $this->template->scripts = array(
        '/assets/' . $this->tpl . '/js/jquery.tooltip.js',
    );*/
    $user = Session::instance()->get('user');
    self::set_full_avatar_path($user);

    $this->response->body(View::factory('default/cabinet', array(
                'user'          => $user
    )));
  }


  public function action_setting()
  {
    if (!self::action_checkout())
    {
      HTTP::redirect("/");
    }
    $user = Session::instance()->get('user');

    /*$this->template->pageTitle = 'Мой личный кабинет';

    $this->template->scripts = array(
        '/assets/' . $this->tpl . '/js/jquery.tooltip.js',
    );

    $html = View::factory($this->tpl . '/editCabinet', array(
    ));*/
    $this->response->body(View::factory('default/setting', array(
                         'user' => $user)));
  }


  public function action_ajax_setting_edit()
  {
    if (!self::action_checkout())
    {
      $this->response->body(array('success' => false)); die();
    }

    $user = Session::instance()->get('user');

    $birth_day          = htmlspecialchars(Arr::get($_POST, 'editBirthDay'), ENT_NOQUOTES);
    $birth_month        = htmlspecialchars(Arr::get($_POST, 'editBirthMonth'), ENT_NOQUOTES);
    $birth_year         = htmlspecialchars(Arr::get($_POST, 'editBirthYear'), ENT_NOQUOTES);
    $birth_date         = $birth_year . '-' . $birth_month . '-' . $birth_day;
    $_POST['birthDate'] = $birth_date;

    $psw                = htmlspecialchars(Arr::get($_POST, 'editPsw'), ENT_NOQUOTES);
    $psw_t              = htmlspecialchars(Arr::get($_POST, 'editPsw_t'), ENT_NOQUOTES);

    $post = Validation::factory($_POST);

    if ($psw != '') {
        $post->rule('editPsw', 'not_empty')
                ->rule('editPsw_t', 'not_empty')
                ->rule('editPsw', 'min_length', array(':value', 6))
                ->rule('editPsw_t', 'min_length', array(':value', 6))
                ->rule('editPsw', 'matches', array(':validation', 'editPsw_t', 'editPsw'));
    }

    $post->rule('editFio', 'not_empty')
            ->rule('editFio', 'regex', array(':value', '/\p{Cyrillic}/u'))
            ->rule('regLogin', 'not_empty')
            ->rule('regLogin', 'Controller_Contest::loginDouble', array(':validation', ':field', ':data'))
            ->rule('editBirthDay', 'not_empty')
            ->rule('editBirthDay', 'numeric')
            ->rule('editBirthMonth', 'not_empty')
            ->rule('editBirthMonth', 'numeric')
            ->rule('editBirthYear', 'not_empty')
            ->rule('editBirthYear', 'numeric')
            ->rule('editCity', 'not_empty')
            ->rule('editCity', 'regex', array(':value', '/\p{Cyrillic}/u'))
            ->rule('editSex', 'not_empty')
            ->rule('birthDate', 'Controller_Contest::validateBirthDate', array(':validation', ':field', ':data'))
            ->rule('regEmail', 'Controller_Contest::emailDouble', array(':validation', ':field', ':data'))
            ->rule('regEmail', 'not_empty')
            ->rule('regEmail', 'email');

    if ($post->check())
    {
      $fio                = htmlspecialchars(Arr::get($_POST, 'editFio'), ENT_NOQUOTES);
      $login              = htmlspecialchars(Arr::get($_POST, 'regLogin'), ENT_NOQUOTES);
      $email              = htmlspecialchars(Arr::get($_POST, 'regEmail'), ENT_NOQUOTES);
      $city               = htmlspecialchars(Arr::get($_POST, 'editCity'), ENT_NOQUOTES);
      $sex                = htmlspecialchars(Arr::get($_POST, 'editSex'), ENT_NOQUOTES);

      $sex = ($sex == '1') ? 'мужской' : 'женский';

      $params = array
      (
        'fio' => $fio,
        'city' => $city,
        'sex' => $sex,
        'date_birth' => $birth_date,
        'email' => $email,
      );
      if ($psw != '')
        $params['password'] = md5($psw);
      if ($login != '')
        $params['login'] = $login;

      DB::update('users')->set($params)->where('id', '=', $user['id'])->execute();
      $queryResult = DB::select()->from('users')->where('id', '=', $user['id'])->execute()->as_array();
      unset($user);

      if (count($queryResult) == 1)
        $this->updateSession($queryResult[0]);

      $output['success'] = true;
      $output['message'] = 'ok';
    }
    else
    {
      $errors = $post->errors(true);
      $output['success'] = false;
      $output['message'] = implode(";  ", $errors);
    }

    $output = json_encode($output);
    $this->response->body($output);
  }


  public function action_photos()
  {
    if (!self::action_checkout())
    {
      header('Location: ' . URL::base() . 'user/registration'); die();
    }
    $user = (self::action_checkout()) ? Session::instance()->get('user') : '';
    $uid = Request::initial()->param('uid');
    $uid = ($uid == NULL) ? $user['id'] : $uid;

    if (Request::initial()->method() == 'POST')
    {
        $avatar = htmlspecialchars(Arr::get($_POST, 'avatar'), ENT_NOQUOTES);
        $avatar = basename($avatar);
        $avatarPath = '/assets/default/avatar/' . $avatar;
        if ($avatar != '' && file_exists($avatarPath))
        {
          $user['photo'] = $_SESSION['user']['photo'] = $avatar;
          $userUpgrade = DB::update('users')->set(array(
                                'photo' => $avatar
                            ))
                            ->where('id', '=', $user['id'])->execute();
        }
    }

    $queryVerification = DB::select()->from('users')->where("id", '=', $uid)->execute()->as_array();
    if (count($queryVerification) == 0)
    {
      header('Location: ' . URL::base() . ''); die();
    }

    $query = DB::select()->from('photos_q')->where("user_id", '=', $uid)->execute()->as_array();
    self::set_full_avatar_list_path($query);

    //$this->template->pageTitle = 'Фотографии';

    $this->response->body(View::factory('default/avatar', array(
                'user'  => $user,
                'album' => $query,
                'uid'   => $uid,
    )));
  }


    public function action_messages()
    {
        if (!$this->action_checkout())
        {
            HTTP::redirect("/");
        }

        //$this->template->pageTitle = "Сообщения";

        $user = Session::instance()->get('user');
        $msgIDUser = (int) Arr::get($user, 'id');

        $msgRes = DB::query(Database::SELECT, "SELECT users.*, messages.* FROM `messages`
            LEFT JOIN `users` ON messages.user_send = users.id
            WHERE messages.user_res=" . $msgIDUser)->execute()->as_array();

        $msgSend = DB::query(Database::SELECT, "SELECT users.*, messages.* FROM `messages`
            LEFT JOIN `users` ON messages.user_send = users.id
            WHERE messages.user_send=" . $msgIDUser)->execute()->as_array();

        self::set_full_avatar_path($user);
        self::set_full_avatar_list_path($msgRes);

        $this->response->body(View::factory('default/messages', array(
                    "user"    => $user,
                    "msgRes"  => $msgRes,
                    "msgSend" => $msgSend,
        )));
    }


    public function action_message_reply()
    {
        if (!$this->action_checkout()) {
            HTTP::redirect("/");
        } 
            if (Request::initial()->method() == 'GET')
            {

            $msgId = (int) Arr::get($_GET, 'id');
            if ($msgId == '') {
                HTTP::redirect("/404");
            }
            $user = Session::instance()->get('user');

            //$this->template->pageTitle = "Ответить";

            $msgRes = DB::query(Database::SELECT, "SELECT users.*, messages.*, 
                messages.id as mid FROM `messages`
                LEFT JOIN `users` ON messages.user_send = users.id
                WHERE messages.id=" . $msgId . " AND messages.user_res=" . intval($user['id']))->execute()->as_array();


            $upgrade = DB::update('messages')->set(array('flag' => 1))
                            ->where('id', '=', $msgId)->execute();

            self::set_full_avatar_path($user);
            self::set_full_avatar_list_path($msgRes);


            $this->response->body(View::factory('/default/msg', array(
                        "user"      => $user,
                        "msgId"     => $msgId,
                        'msgRes'    => $msgRes
            )));
        }
        else
        {
            $msgId = (int) Arr::get($_POST, 'idQ');
            if ($msgId == '')
            {
                HTTP::redirect("/404");
            }
            $user = Session::instance()->get('user');

            $msg = htmlspecialchars(Arr::get($_POST, 'msgSend'), ENT_NOQUOTES);

            //$this->template->pageTitle = "Ответить";


            $resUser = DB::select('user_send')->from('messages')
                            ->where("id", "=", $msgId)->execute()->get('user_send');
            $date = date("Y-m-d H:i:s");

            $query = DB::insert('messages', array('user_send', 'user_res', 'message', 'date_post', 'flag'))
                            ->values(array($user['id'], $resUser, $msg, $date, 0))->execute();

            $this->response->body(View::factory('/default/reply_success', array(
                        "msgIDUser" => $user['id'],
                        "msgId" => $msgId,
            )));
        }
    }


    public function action_logout()
    {
        session_destroy();
          header( 'Location: ' . URL::base() . '' ) ; die();
    }


/********************************************************** AJAX фнукции **********************************************************/
    public function action_ajax_upload_file()
    {
        $uploaddir = DOCROOT . '/assets/default/avatar/';
        $filename = strtolower(Text::random('alnum', 20)) . '.jpg';
        $respondFile = '/assets/default/avatar/' . $filename;
        $file = $uploaddir . $filename;
        if (move_uploaded_file($_FILES['avatarLoad']['tmp_name'], $file)) {
            print_r($filename);
            die();
        } else {
            echo "error";
        }
    }

    public function action_ajax_send_message()
    {
        if (Request::initial()->method() != 'POST')
        {
            HTTP::redirect('/404');
        }
        if (!self::action_checkout())
        {
            HTTP::redirect("/404");
        }
        $user = Session::instance()->get('user');

        $userRes = (int) htmlspecialchars(Arr::get($_POST, 'idUser'), ENT_NOQUOTES);
        if ($userRes == '') {
            HTTP::redirect("/404");
        }

        $id_user = (int) Arr::get($user, 'id');
        $dt = date('Y-m-d H:i:s');
        $msg = trim(htmlspecialchars(Arr::get($_POST, 'msg'), ENT_NOQUOTES));
        if ($msg != '') {
            $query = DB::insert('messages', array('user_send', 'user_res', 'message', 'date_post', 'flag'))
                    ->values(array($id_user, $userRes, $msg, $dt, 0))
                    ->execute();
            $output['success'] = true;
            $output['message'] = 'Сообщение отправлено.';
        } else {
            $output['success'] = false;
            $output['message'] = 'Введите текст сообщения.';
        }

        $output = json_encode($output);
        $this->response->body($output);
    }

    public function action_delete_photo_ajax()
    {
        $output['success'] = true;

        if (!self::action_checkout())
        {
            $output['success'] = false;
            $output['message'] = 'Неизвестная ошибка. Попробуйте позже';
        }
        else
        {
            if ($this->request->method() == 'POST')
            {
                $user = Session::instance()->get('user');
                $userID = htmlspecialchars(Arr::get($_POST, 'idUser'), ENT_NOQUOTES);
                $photo = htmlspecialchars(Arr::get($_POST, 'photoId'), ENT_NOQUOTES);

                if ($user['id'] == $userID)
                {
                    $query = DB::insert('deletePhoto', array('userId', 'photo'))
                                    ->values(array($user['id'], $photo))->execute();
                }
                else
                {
                    $output['success'] = false;
                    $output['message'] = 'Неизвестная ошибка. Попробуйте позже';
                }

            }
            else
            {
                $output['success'] = false;
                $output['message'] = 'Неизвестная ошибка. Попробуйте позже';
            }
        }

        $output = json_encode($output);
        $this->response->body($output);
    }


/********************************************************** Служебные фнукции **********************************************************/
  static public function action_checkout()
  {
    return (Session::instance()->get('user') != NULL);
  }


  static public function set_full_avatar_list_path(&$users, $avatarKey = 'photo')
  {
    foreach($users AS &$user)
      self::set_full_avatar_path($user, $avatarKey);
  }


  static public function set_full_avatar_path(&$user, $avatarKey = 'photo')
  {
    if (isset($user[$avatarKey]) && $user[$avatarKey] != '' && file_exists(DOCROOT . '/assets/default/avatar/' . $user[$avatarKey]))
      $user[$avatarKey] = '/assets/default/avatar/' . $user[$avatarKey];
    else
      $user[$avatarKey] = '/assets/default/img/base-img.png';
  }


  private function updateSession($user)
  {
    Session::instance()->set('user', $user);
    return true;
  }
};

?>