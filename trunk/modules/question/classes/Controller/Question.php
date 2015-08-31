<?php defined('SYSPATH') OR die('No direct access allowed.');

  class Controller_Question extends Controller
  {
    public function before()
    {
      if (!Request::initial()->is_ajax())
        if (Request::current()->is_initial())
          die('Access denied.');

      parent::before();
    }

    public function action_get_questions()
    {
      $user    =  Session::instance()->get('user');
      $catID   = intval($this->request->param('catID', 0));
      $orderBy = intval($this->request->param('orderBY'));
      $orderBy = min(max(self::$ORDER_BY_DATE, $orderBy), self::$ORDER_BY_LIKE);

      $conditions = array();
      $conditions['catID'] = $catID;
      if (isset($_GET['q']))
        $conditions['search'] = htmlspecialchars($_GET['q'], ENT_NOQUOTES);
      $questions = $this->get_questions($conditions, $orderBy, 0, ($this->GET_ROWS_COUNT + 1));
      Controller_Users::set_full_avatar_list_path($questions);

      $isAllElement = true;
      if (count($questions) == ($this->GET_ROWS_COUNT + 1))
      {
        unset($questions['data'][$this->GET_ROWS_COUNT]);
        $isAllElement = false;
      }


      /*$this->template->pageTitle = 'Главная страница';
      //$this->template->pageTitle = 'Все вопросы';*/

      $this->response->body(View::factory('default/all', array(
                  'user'              => $user,
                  'catID'             => $catID,
                  'questions'         => $questions,
                  'isAllElement'      => $isAllElement)));
    }


    public function action_get_left_questions_best()
    {
        $user = Session::instance()->get('user');

        //популярные
        $questions = $this->get_questions(array(), self::$ORDER_BY_LIKE, 0, $this->GET_ROWS_BEST_COUNT);
        Controller_Users::set_full_avatar_list_path($questions);

        //активные участники
        $usersA = DB::query(Database::SELECT, "SELECT user.id,user.photo, user.fio,user.login, 
            user.points,
            count(question.id) as qnt FROM `users` user 
            LEFT JOIN `question` question ON user.id=question.user_id group by user.id
            ORDER BY qnt DESC LIMIT 5
            ")->execute()->as_array();
        Controller_Users::set_full_avatar_list_path($usersA);


        $this->response->body(View::factory('default/side_left', array(
                    'user'      => $user,
                    'questionP' => $questions, 'usersA' => $usersA)));
    }

    static public function get_prefix_cats()
    {
      if (strpos($_SERVER['REQUEST_URI'], 'user') !== FALSE)
      {
        $linkPrefix = 'user' . '/' . 'question';
      }
      else if (strpos($_SERVER['REQUEST_URI'], 'cabinet') !== FALSE)
      {
        $linkPrefix = 'cabinet' . '/' . 'question';
      }
      else if (strpos($_SERVER['REQUEST_URI'], 'search') !== FALSE)
      {
        $linkPrefix = 'search' . '/' . 'question';
      }
      else
      {
        $linkPrefix = 'question';
      }
      return $linkPrefix;
    }


    public function action_get_cats()
    {
      $uid = $this->request->param('userID');
      $uid = ($uid !== NULL) ? intval($uid) : $uid;

      $linkPrefix = self::get_prefix_cats();


      //список категорий
      $categories = DB::query(Database::SELECT, "SELECT * FROM `category`")->execute();

      $content = View::factory('default/side_right', array(
                      'categories' => $categories,
                      'linkPrefix' => $linkPrefix,
                      ));

      if ($uid !== NULL)
        $content->uid = $uid;

      $this->response->body($content);
    }


    public function action_ask()
    {
      if (Request::initial()->method() == 'POST')
      {
        $this->doProcessQuestion();
        return;
      }

      $question = htmlspecialchars(Arr::get($_POST, 'message'), ENT_NOQUOTES);
      $category = DB::query(Database::SELECT, "SELECT * FROM `category`")->execute();
      //$this->template->pageTitle = 'Задать вопрос';

      //$this->template->header = View::factory($this->tpl . '/header_q');

      $this->response->body(View::factory('default/ask_question', array(
                    'question' => $question,
                    'category' => $category)));
    }


    public function doProcessQuestion()
    {
      if (!Controller_Users::action_checkout())
      {
          header( 'Location: ' . URL::base() . 'user/registration' ) ; die();
      }

      $question = htmlspecialchars(Arr::get($_POST, 'textareaask'), ENT_NOQUOTES);
      $id_cat = (int) Arr::get($_POST, 'catId');
      $item = array();
      $userID = intval(Arr::get(Session::instance()->get('user'), 'id'));

      if ($id_cat != '' && $question != '')
      {
          $original = DOCROOT . 'assets/default/photosQ/original/';
          $middle = DOCROOT . 'assets/default/photosQ/middle/';

          $date = date("Y-m-d H:i:s");
          $points = DB::query(Database::SELECT, "SELECT `points` FROM `users` WHERE `id`=" . $userID)->execute()->get('points');
          $points = $points + 10;

          $_SESSION['points'] = $points;
          $query = DB::insert('question', array('contest_id', 'user_id', 'text_q', 'date_post', 'ip', 'useragent'))
                          ->values(array($id_cat, $userID, $question, $date, '', ''))->execute();

          DB::update('users')->set(array('points' => $points,))->where('id', '=', $userID)->execute();
          $last_item = DB::select(array(DB::expr("LAST_INSERT_ID()"), "ID"))->execute()->get('ID');

          try
          {
              if (isset($_FILES['photos'])) {
                  if (!is_array($_FILES['photos']['tmp_name'])) {
                      $_FILES['photos']['tmp_name'] = array($_FILES['photos']['tmp_name']);
                      $_FILES['photos']['name'] = array($_FILES['photos']['name']);
                      $_FILES['photos']['error'] = array($_FILES['photos']['error']);
                  }
                  foreach ($_FILES['photos']['tmp_name'] as $key => $value) {

                      if ($_FILES['photos']['error'][$key] != UPLOAD_ERR_OK) {
                          echo "Не удалось добавить картинку \"{$_FILES['photos']['name'][$key]}\"";

                          continue;
                      }
                      try
                      {
                          $image = Image::factory($value);
                          $file_name = $userID . Text::random(NULL, 5) . '.jpg';
                          $image->save($original . $file_name);
                          array_push($item, $file_name);
                          $image->resize(530, 430, Image::INVERSE)
                                  ->crop(430, 330)
                                  ->save($middle . $file_name);


                          unset($image);
                      } catch (Exception $e) {
                          $errors[] = "Не удалось добавить картинку \"{$_FILES['photos']['name'][$key]}\". <!--{$e->getMessage()}-->";
                      }
                  }
              }
          }
          catch (Exception $e)
          {
              $errors[] = "Не удалось добавить картинки. <!--{$e->getMessage()}-->";
          }

          $item = json_encode($item);

          $queryPhoto = DB::insert('photos_q', array(
                              'photos', 'user_id', 'question_id'
                          ))
                          ->values(array($item, $userID, $last_item))->execute();

          header( 'Location: ' . URL::base() . 'user/profile' ) ; die();
      }
      else
      {
          header( 'Location: ' . URL::base() . 'question/ask' ) ; die();
      }
    }


    public function action_get_user_questions()
    {
      $uid = intval($this->request->param('userID', 0));
      $cid = intval($this->request->param('catID', 0));

      $conditions = array();
      $conditions['userID'] = $uid;
      $conditions['catID']  = $cid;
      if (isset($_GET['q']))
        $conditions['search'] = htmlspecialchars($_GET['q'], ENT_NOQUOTES);

      $user_question = self::get_questions($conditions, Controller_Question::$ORDER_BY_LIKE, 0, ($this->GET_ROWS_COUNT + 1));
      $isAllElement = true;
      if (count($user_question) == ($this->GET_ROWS_COUNT + 1))
      {
        unset($questions['data'][$this->GET_ROWS_COUNT]);
        $isAllElement = false;
      }

      $user_answer   = self::get_answers($conditions, Controller_Question::$ORDER_BY_LIKE, 0, 10);

      Controller_Users::set_full_avatar_list_path($user_question);
      //print_r(Auth::instance()->get_user());
      //$this->template->pageTitle = 'Результат поиска';

      $this->response->body(View::factory('default/user_questions', array(
                  'answers'           => $user_answer,
                  'uid'               => $uid,
                  'catID'             => $cid,
                  'questions'         => $user_question,
                  'isAllElement'      => $isAllElement,
                  'user'              => Session::instance()->get('user'),
                  'getBest'           => 0)));
    }


  /********************************************************** Служебные фнукции **********************************************************/
      static public function get_questions($conditions, $order, $offsetRows , $countRows)
      {
        if (isset($where))
          unset($where);

        if (isset($conditions['catID']) && intval($conditions['catID']) > 0)
          $where = (isset($where) ? $where . ' AND ' : '') . 'question.contest_id = ' . intval($conditions['catID']);

        if (isset($conditions['userID']))
          $where = (isset($where) ? $where . ' AND ' : '') . 'question.user_id = ' . intval($conditions['userID']);


        if (isset($conditions['search']))
          $where = (isset($where) ? $where . ' AND ' : '') . ' `text_q` LIKE \'%' . htmlspecialchars($conditions['search'], ENT_NOQUOTES) . '%\'';

        if (isset($where))
          $where = ' WHERE ' . $where;

        $order_by = '';
        if (isset($order))
        {
          switch ($order)
          {
            case self::$ORDER_BY_DATE:
              $order_by = ' ORDER BY question.date_post DESC';
            break;
            case self::$ORDER_BY_LIKE:
              $order_by = ' ORDER BY liken DESC';
            break;
          }
        }

        $limit = " LIMIT $offsetRows, $countRows";

        $questions = DB::query(Database::SELECT, "SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
            `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`, photos_q.*
            FROM `question`
            LEFT JOIN `users` ON question.user_id = users.id
            LEFT JOIN `category` ON question.contest_id = category.id
            LEFT JOIN `photos_q` ON question.id = photos_q.question_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
            ON question.id = l.work_id" . (isset($where) ? $where : '') . $order_by . $limit)->execute()->as_array();

        return $questions;
    }


      static public function get_answers($conditions, $order, $offsetRows , $countRows)
      {
        if (isset($where))
          unset($where);

        if (isset($conditions['catID']) && intval($conditions['catID']) > 0)
          $where = (isset($where) ? $where . ' AND ' : '') . 'question.contest_id = ' . intval($conditions['catID']);

        if (isset($conditions['userID']))
        {
          $where_answers = ' WHERE `user_id` = ' . $conditions['userID'];
          $where         = (isset($where) ? $where . ' AND ' : '') . 'question.user_id <> ' . intval($conditions['userID']);
        }

        if (isset($conditions['search']))
          $where = (isset($where) ? $where . ' AND ' : '') . ' `text_q` LIKE \'%' . htmlspecialchars($conditions['search'], ENT_NOQUOTES) . '%\'';

        $order_by = '';
        if (isset($order))
        {
          switch ($order)
          {
            case self::$ORDER_BY_DATE:
              $order_by = ' ORDER BY question.date_post DESC';
            break;
            case self::$ORDER_BY_LIKE:
              $order_by = ' ORDER BY liken DESC';
            break;
          }
        }

      $limit = " LIMIT $offsetRows, $countRows";

      $answerIDs = array();
      $tempAnsw  = DB::query(Database::SELECT, 'SELECT `work_id` FROM `answers_yes`' . $where_answers)
                      ->execute()->as_array();
      foreach ($tempAnsw AS $aswid)
        array_push($answerIDs, $aswid['work_id']);

      $tempAnsw = DB::query(Database::SELECT, 'SELECT `work_id` FROM `answers_no`' . $where_answers)
                      ->execute()->as_array();
      foreach ($tempAnsw as $aswid)
        array_push($answerIDs, $aswid['work_id']);

      
      $answers = NULL;
      if (count($answerIDs) > 0)
      {
        $where = (isset($where) ? $where . ' AND ' : '') . " question.id IN (" . implode(',', $answerIDs) . ")";
        if (isset($where))
          $where = ' WHERE ' . $where;


        $answers = DB::query(Database::SELECT, "SELECT question.*,question.id as
                                                uidQuest, category.*,users.*, users.fio as `user`,
                                                `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`, photos_q.*
                                                FROM `question`
                                                LEFT JOIN `users` ON question.user_id = users.id
                                                LEFT JOIN `category` ON question.contest_id = category.id
                                                LEFT JOIN `photos_q` ON question.id = photos_q.question_id

                                                LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
                                                LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
                                                LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l
                                                ON question.id = l.work_id " . $where)->execute()->as_array();
      }
      return $answers;
    }


/********************************************************** AJAX ЗАПРОСЫ **********************************************************/
    public function action_get_questions_ajax()
    {
      if (!Request::initial()->is_ajax())
        exit(0);

      $catID        = intval($_POST['catID']);
      $fromQuestion = intval($_POST['fromQuestion']);

      $conditions = array();
      $conditions['catID'] = $catID;
      if (isset($_GET['q']))
        $conditions['search'] = htmlspecialchars($_GET['q'], ENT_NOQUOTES);

      $questions['data'] = $this->get_questions($conditions, ($catID > 0) ? self::$ORDER_BY_DATE : self::$ORDER_BY_LIKE, $fromQuestion, ($this->GET_ROWS_COUNT + 1));
      $questions['isAllElement'] = true;
      if (count($questions['data']) == ($this->GET_ROWS_COUNT + 1))
      {
        unset($questions['data'][$this->GET_ROWS_COUNT]);
        $questions['isAllElement'] = false;
      }


      echo json_encode($questions);
    }


    public function action_do_like_ajax()
    {
        if (Request::initial()->method() != 'POST')
        {
            HTTP::redirect('/404');
        }
        if (!Controller_Users::action_checkout())
        {
            HTTP::redirect("/404");
        }
        $user = Session::instance()->get('user');

        $id_work = (int) htmlspecialchars(Arr::get($_POST, 'idWork'), ENT_NOQUOTES);

        $id_user = $user['id'];
        $dt = date('Y-m-d [H:i:s]');
        $browser = Controller_Manager::getBrowser();
        $ip = Controller_Manager::getIp();
        $verification = DB::query(Database::SELECT, "SELECT count(*) FROM `answers` WHERE 
            `user_id`=" . $id_user . " AND work_id=" . $id_work)->execute()->get('count(*)');

        if ($verification == 0) {
            $query = DB::insert('answers', array('user_id', 'work_id', 'date_post', 'ip', 'useragent'))
                    ->values(array($id_user, $id_work, $dt, $ip, $browser))
                    ->execute();
            $output['success'] = true;
            $output['message'] = 'Спасибо, Ваш голос учтен';
        } else {
            $output['success'] = false;
            $output['message'] = 'Ошибка. Вы не можете голосовать за этот вопрос';
        }

        $output = json_encode($output);
        $this->response->body($output);
    }

    public function action_do_answ_yes() {
        if (!$this->request->method() == 'POST') {
            HTTP::redirect('/404');
        }
        if (!Controller_Users::action_checkout()) {
            HTTP::redirect("/404");
        }

        $user = Session::instance()->get('user');


        $id_work = (int) htmlspecialchars(Arr::get($_POST, 'idWork'), ENT_NOQUOTES);

        $id_user = $user['id'];
        $dt = date('Y-m-d [H:i:s]');
        $browser = Controller_Manager::getBrowser();
        $ip = Controller_Manager::getIp();
        $verification = DB::query(Database::SELECT, "SELECT count(*) FROM `answers_no` WHERE 
            `user_id`=" . $id_user . " AND work_id=" . $id_work)->execute()->get('count(*)');

        $verification2 = DB::query(Database::SELECT, "SELECT count(*) FROM `answers_yes` WHERE 
            `user_id`=" . $id_user . " AND work_id=" . $id_work)->execute()->get('count(*)');

        if ($verification == 0 && $verification2 == 0) {
            $query = DB::insert('answers_yes', array('user_id', 'work_id', 'date_post', 'ip', 'useragent'))
                    ->values(array($id_user, $id_work, $dt, $ip, $browser))
                    ->execute();
            $output['success'] = true;
            $output['message'] = 'Спасибо, Ваш голос учтен';
        } else {
            $output['success'] = false;
            $output['message'] = 'Ошибка. Вы не можете голосовать за этот вопрос';
        }


        $output = json_encode($output);
        $this->response->body($output);
    }

    public function action_do_answ_no() {
        if (!$this->request->method() == 'POST') {
            HTTP::redirect('/404');
        }
        if (!Controller_Users::action_checkout()) {
            HTTP::redirect("/404");
        }

        $user = Session::instance()->get('user');


        $id_work = (int) htmlspecialchars(Arr::get($_POST, 'idWork'), ENT_NOQUOTES);

        $id_user = $user['id'];
        $dt = date('Y-m-d [H:i:s]');
        $browser = Controller_Manager::getBrowser();
        $ip = Controller_Manager::getIp();
        $verification = DB::query(Database::SELECT, "SELECT count(*) FROM `answers_no` WHERE 
            `user_id`=" . $id_user . " AND work_id=" . $id_work)->execute()->get('count(*)');

        $verification2 = DB::query(Database::SELECT, "SELECT count(*) FROM `answers_yes` WHERE 
            `user_id`=" . $id_user . " AND work_id=" . $id_work)->execute()->get('count(*)');

        if ($verification == 0 && $verification2 == 0) {
            $query = DB::insert('answers_no', array('user_id', 'work_id', 'date_post', 'ip', 'useragent'))
                    ->values(array($id_user, $id_work, $dt, $ip, $browser))
                    ->execute();
            $output['success'] = true;
            $output['message'] = 'Спасибо, Ваш голос учтен';
        } else {
            $output['success'] = false;
            $output['message'] = 'Ошибка. Вы не можете голосовать за этот вопрос';
        }


        $output = json_encode($output);
        $this->response->body($output);
    }


  private $GET_ROWS_COUNT      = 10;
  private $GET_ROWS_BEST_COUNT = 5;

  static public $ORDER_BY_DATE = 0;
  static public $ORDER_BY_LIKE = 1;

  };
