<?php defined('SYSPATH') or die('No direct script access.');

  class Controller_Manager extends Controller_Common
  {
    public function before()
    {
      parent::before();
    }


/********************************************************** Статические страницы **********************************************************/
    public function action_show_static_page()
    {
      $page['name'] = $this->request->param('page', '');
      $page['name'] = htmlspecialchars($page['name']);
      $page['name'] = mysql_escape_string($page['name']);
      switch ($page['name'])
      {
        case 'help':
        case 'contact':
        case 'about':
        {
          break;
        }
        default:
        {
          $page['name'] = '';
          break;
        }
      }

      $this->template->content = View::Factory($page['name']);
    }

/********************************************************** Страницы вопросов **********************************************************/
    public function action_question_best()
    {
      $question = Request::factory('user_question/get_questions/catID=0/' . Controller_Question::$ORDER_BY_LIKE)->execute();
      $this->template->content = $question->body();
    }

    public function action_get_questions()
    {
      $catID = intval($this->request->param('catID', 0));

      $question = Request::factory("user_question/get_questions/catID=$catID")->execute();
      $this->template->content = $question->body();
    }

    public function action_ask()
    {
      $question = Request::factory("module_question/ask")->execute();
      $this->template->content = $question->body();
    }

    public function action_cats()
    {
      echo "action_cats";
      exit(0);
    }


/********************************************************** Страницы пользовтелей **********************************************************/
    public function action_user_id()
    {
      $uid = intval($this->request->param('userID', 0));
      $cid = intval($this->request->param('catID', 0));

      $user_data     = Request::factory("module_users/get_user/$uid")->execute();
      $question_data = Request::factory("module_question/get_user_questions/$uid/$cid")->execute();

      $this->template->content = $user_data->body() . $question_data->body();
    }


    public function action_user_messages()
    {
      $userRequest = Request::factory("module_users/profile/messages")->execute();
      $this->template->content = $userRequest->body();
    }


    public function action_user_message_reply()
    {
      $userRequest = Request::factory("module_users/profile/reply")->execute();
      $this->template->content = $userRequest->body();
    }


    public function action_user_logout()
    {
      $userRequest = Request::factory("module_users/profile/logout")->execute();
      $this->template->content = $userRequest->body();
    }

    public function action_user_profile()
    {
      if (!Controller_Users::action_checkout())
      {
        HTTP::redirect("/"); die();
      }

      $user = Session::instance()->get('user');
      $uid = $user['id'];
      $cid = intval($this->request->param('catID', 0));

      $userRequest   = Request::factory("module_users/profile/")->execute();
      $question_data = Request::factory("module_question/get_user_questions/$uid/$cid")->execute();
      $this->template->content = $userRequest->body() . $question_data->body();
    }

    public function action_user_setting()
    {
      $userRequest = Request::factory("module_users/setting/")->execute();
      $this->template->content = $userRequest->body();
    }

    public function action_user_photos()
    {
      $userRequest = Request::factory("module_users/photos/")->execute();
      $this->template->content = $userRequest->body();
    }

    public function action_user_leaders()
    {
      $userRequest = Request::factory("module_users/leaders/")->execute();
      $this->template->content = $userRequest->body();
    }

    public function action_user_registration()
    {
      $userRequest = Request::factory("module_users/registration/")->execute();
      $this->template->content = $userRequest->body();
    }

    public function action_user_registration_success()
    {
      $userRequest = Request::factory("module_users/registration_success/")->execute();
      $this->template->content = $userRequest->body();
    }


/************************************ Служебные функции ************************************/
    public static function getBrowser() {
        $user_agent = $_SERVER["HTTP_USER_AGENT"];
        if (strpos($user_agent, "Firefox") !== false)
            $browser = "Firefox";
        elseif (strpos($user_agent, "Opera") !== false)
            $browser = "Opera";
        elseif (strpos($user_agent, "Chrome") !== false)
            $browser = "Chrome";
        elseif (strpos($user_agent, "MSIE") !== false)
            $browser = "Internet Explorer";
        elseif (strpos($user_agent, "Safari") !== false)
            $browser = "Safari";
        else
            $browser = "Неизвестный";
        return $browser;
    }

    public static function getIp() {
        static $ip = null;
        if ($ip === null) {
            if (isset($_SERVER)) {
                if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $this->isValidIp($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } elseif (isset($_SERVER['HTTP_CLIENT_IP']) && $this->isValidIp($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } else {
                    $ip = $_SERVER['REMOTE_ADDR'];
                }
            } else {
                if (getenv('HTTP_X_FORWARDED_FOR') && $this->isValidIp(getenv('HTTP_X_FORWARDED_FOR'))) {
                    $ip = getenv('HTTP_X_FORWARDED_FOR');
                } elseif (getenv('HTTP_CLIENT_IP') && $this->isValidIp(getenv('HTTP_CLIENT_IP'))) {
                    $ip = getenv('HTTP_CLIENT_IP');
                } else {
                    $ip = getenv('REMOTE_ADDR');
                }
            }
        }
        return $ip;
    }
  };
