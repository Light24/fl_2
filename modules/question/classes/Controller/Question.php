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
      $conditions['userID']['value'] = $user['id'];
      $conditions['userID']['sign']  = '<>';
      $conditions['catID']['value'] = $catID;
      $conditions['catID']['sign']  = '=';
      if (isset($_GET['q']))
      {
        $conditions['search']['value'] = htmlspecialchars($_GET['q'], ENT_NOQUOTES);
        $conditions['search']['sign']  = "LIKE";
      }

      $questions_total = 0;
      $questions = self::get_questions($conditions, $orderBy, 0, $this->GET_ROWS_COUNT, $questions_total);
      Controller_Users::set_full_avatar_list_path($questions);


      /*$this->template->pageTitle = 'Главная страница';
      //$this->template->pageTitle = 'Все вопросы';*/

      $this->response->body(View::factory('default/all', array(
                  'user'              => $user,
                  'uid'               => NULL,
                  'catID'             => $catID,
                  'questions'         => $questions,
                  'questions_total'   => $questions_total,
                  'is_search'         => isset($_GET['q']),)));
    }


    public function action_get_left_questions_best()
    {
        $user = Session::instance()->get('user');

        //популярные
        $questions = self::get_questions(array(), self::$ORDER_BY_LIKE, 0, $this->GET_ROWS_BEST_COUNT);
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

    static public function get_prefix_cats($uid, $uidProfile)
    {
      if (strpos($_SERVER['REQUEST_URI'], 'leaders') !== FALSE)
      {
        $sort_type     = htmlspecialchars(Request::initial()->param('sort_type', 'points'), ENT_NOQUOTES);
        $duration_type = htmlspecialchars(Request::initial()->param('duration_type', 'all'), ENT_NOQUOTES);

        $linkPrefix = 'user' . '/' . 'leaders' . '/';
        $linkPrefix .= $sort_type . '/' . $duration_type;
      }
      else if (strpos($_SERVER['REQUEST_URI'], 'user') !== FALSE && strpos($_SERVER['REQUEST_URI'], 'registration') === FALSE)
      {
        $linkPrefix = 'user' . '/' . 'question' . '/' . 'cats' . '/';
        $linkPrefix .= ($uid > 0) ? $uid : $uidProfile;
      }
      else if (strpos($_SERVER['REQUEST_URI'], 'cabinet') !== FALSE)
      {
        $linkPrefix = 'cabinet' . '/' . 'question' . '/' . 'cats';
      }
      else if (strpos($_SERVER['REQUEST_URI'], 'search') !== FALSE)
      {
        $linkPrefix = 'search' . '/' . 'question' . '/' . 'cats';
      }
      else
      {
        $linkPrefix = 'question' . '/' . 'cats';
      }
      return $linkPrefix;
    }


    public function action_get_cats()
    {
      $uid = $this->request->param('userID');
      $uid = ($uid !== NULL) ? intval($uid) : $uid;

      $cid = $this->request->param('catID');
      $cid = ($cid !== NULL) ? intval($cid) : $cid;

      $user = Session::instance()->get('user');
      $linkPrefix = self::get_prefix_cats($uid, $user !== NULL ? $user['id'] : 0);


      //список категорий
      $categories = DB::query(Database::SELECT, "SELECT * FROM `category`")->execute();

      $content = View::factory('default/side_right', array(
                      'cid'        => $cid,
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
      $user = Session::instance()->get('user');

      $uid = intval($this->request->param('userID', 0));
      $cid = intval($this->request->param('catID', 0));

      $conditions = array();
      $conditions['userID']['value'] = $uid;
      $conditions['userID']['sign']  = '=';

      $conditions['catID']['value'] = $cid;
      $conditions['catID']['sign']  = '=';

      if (isset($_GET['q']))
      {
        $conditions['search']['value'] = htmlspecialchars($_GET['q'], ENT_NOQUOTES);
        $conditions['search']['sign']  = 'LIKE';
      }

      $questions_total = 0;
      $answers_total   = 0;
      $user_question = self::get_questions($conditions, Controller_Question::$ORDER_BY_LIKE, 0, $this->GET_ROWS_COUNT, $questions_total );
      $user_answer   = self::get_answers($conditions, Controller_Question::$ORDER_BY_LIKE, 0, $this->GET_ROWS_COUNT, $answers_total);

      $user_answer_compare = ($user !== NULL) ? $this->get_answers_compare($uid, $user['id']) : NULL;

      Controller_Users::set_full_avatar_list_path($user_question);
      Controller_Users::set_full_avatar_list_path($user_answer);
      //print_r(Auth::instance()->get_user());
      //$this->template->pageTitle = 'Результат поиска';

      $this->response->body(View::factory('default/user_questions', array(
                  'answers'           => $user_answer,
                  'answers_compare'   => $user_answer_compare,
                  'uid'               => $uid,
                  'catID'             => $cid,
                  'questions'         => $user_question,
                  'questions_total'   => $questions_total,
                  'answers_total'     => $answers_total,
                  'user'              => $user,
                  'is_search'         => isset($_GET['q']),)));
    }


  /********************************************************** Служебные фнукции **********************************************************/
      static public function get_questions($conditions, $order, $offsetRows , $countRows, &$questions_total = NULL)
      {
        if (isset($where))
          unset($where);

        if (isset($conditions['catID']) && intval($conditions['catID']['value']) > 0)
          $where = (isset($where) ? $where . ' AND ' : '') . 'question.contest_id ' . $conditions['catID']['sign'] . intval($conditions['catID']['value']);

        if (isset($conditions['userID']))
          $where = (isset($where) ? $where . ' AND ' : '') . 'question.user_id ' . $conditions['userID']['sign'] . intval($conditions['userID']['value']);


        if (isset($conditions['search']))
          $where = (isset($where) ? $where . ' AND ' : '') . ' `text_q` LIKE \'%' . htmlspecialchars($conditions['search']['value'], ENT_NOQUOTES) . '%\'';

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

        // TODO добавить в таблицу users стобец questions_total
        if ($questions_total !== NULL)
        {
          $query = DB::query(Database::SELECT, "SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
              `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`, photos_q.*
              FROM `question`
              LEFT JOIN `users` ON question.user_id = users.id
              LEFT JOIN `category` ON question.contest_id = category.id
              LEFT JOIN `photos_q` ON question.id = photos_q.question_id
              LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
              LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
              LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
              ON question.id = l.work_id" . (isset($where) ? $where : '') . $order_by)->execute()->as_array();
          $questions_total = count($query);
        }
        return $questions;
    }


      static public function get_answers($conditions, $order, $offsetRows , $countRows, &$answers_total = NULL)
      {
        if (isset($where))
         unset($where);

        if (isset($where_answers))
          unset($where_answers);

        if (isset($conditions['catID']) && intval($conditions['catID']['value']) > 0)
          $where = (isset($where) ? $where . ' AND ' : '') . 'question.contest_id = ' . intval($conditions['catID']['value']);

        if (isset($conditions['userID']))
        {
          $where_answers = ' WHERE `user_id` = ' . intval($conditions['userID']['value']);
          $where         = (isset($where) ? $where . ' AND ' : '') . 'question.user_id <> ' . intval($conditions['userID']['value']);
        }

        if (isset($conditions['search']))
          $where = (isset($where) ? $where . ' AND ' : '') . ' `text_q` LIKE \'%' . htmlspecialchars($conditions['search']['value'], ENT_NOQUOTES) . '%\'';

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

      $answers = array();
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
                                                ON question.id = l.work_id " . $where . $limit)->execute()->as_array();
      // TODO добавить в таблицу users стобец questions_total

        if ($answers_total !== NULL)
        {
          $query = DB::query(Database::SELECT, "SELECT question.*,question.id as
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
          $answers_total = count($query);
        }
      }
      return $answers;
    }


    // Функция рассчитывает сходство ответов двух пользователей, учитываются только те вопросы, на которые ответили оба пользователя итоговая формула: $answer_indent / ($answer_indent + $answer_diff) * 100
    public function get_answers_compare($uid_f, $uid_s)
    {
      $uid_f = intval($uid_f);
      $uid_s = intval($uid_s);

      $answers_n = DB::query(Database::SELECT, 'SELECT `work_id`, `user_id` FROM answers_no WHERE `user_id` = ' . $uid_f . ' OR `user_id` = ' . $uid_s . ' ORDER BY work_id ASC')->execute()->as_array();
      $answers_y = DB::query(Database::SELECT, 'SELECT `work_id`, `user_id` FROM answers_yes WHERE `user_id` = ' . $uid_f . ' OR `user_id` = ' . $uid_s . ' ORDER BY work_id ASC')->execute()->as_array();

      $answer_indent = 0;
      $answer_diff = 0;
      for ($answerIndex = 0; $answerIndex != count($answers_y); )
      {
        if ($answerIndex != (count($answers_y) - 1) && $answers_y[$answerIndex]['work_id'] == $answers_y[$answerIndex + 1]['work_id'])
        {
          ++$answer_indent;
          $answerIndex += 2;
        }
        else
        {
          //++$answer_diff;
          $answerIndex += 1;
        }
      }

      for ($answerIndex = 0; $answerIndex != count($answers_n); )
      {
        if ($answerIndex != (count($answers_n) - 1) && $answers_n[$answerIndex]['work_id'] == $answers_n[$answerIndex + 1]['work_id'])
        {
          ++$answer_indent;
          $answerIndex += 2;
        }
        else
        {
          if ($answers_n[$answerIndex]['user_id'] == $uid_f)
          {
            foreach ($answers_y AS $answer)
            {
              if ($answer['user_id'] == $uid_s && $answer['user_id'] == $answers_n[$answerIndex]['user_id'])
              {
                ++$answer_diff;
                break;
              }
            }
          }
          //++$answer_diff;
          $answerIndex += 1;
        }
      }
      if ($answer_indent + $answer_diff == 0)
        return 0;
      return $answer_indent / ($answer_indent + $answer_diff) * 100;
    }

/********************************************************** AJAX ЗАПРОСЫ **********************************************************/
    public function action_get_questions_ajax()
    {
      if (!Request::initial()->is_ajax())
        exit(0);

      $uid          = intval($_POST['uid']);
      $catID        = intval($_POST['catID']);
      $fromQuestion = intval($_POST['fromQuestion']);

      $conditions = array();
      $conditions['userID']['value'] = $uid;
      $conditions['userID']['sign']  = '=';

      $conditions['catID']['value'] = $catID;
      $conditions['catID']['sign']  = '=';

      if (isset($_GET['q']))
      {
        $conditions['search']['value'] = htmlspecialchars($_GET['q'], ENT_NOQUOTES);
        $conditions['search']['sign']  = '=';
      }

      $questions['data'] = self::get_questions($conditions, ($catID > 0) ? self::$ORDER_BY_DATE : self::$ORDER_BY_LIKE, $fromQuestion, $this->GET_ROWS_COUNT);
      Controller_Users::set_full_avatar_list_path($questions['data']);

      echo json_encode($questions);
    }


    public function action_get_answers_ajax()
    {
      if (!Request::initial()->is_ajax())
        exit(0);

      $uid          = intval($_POST['uid']);
      $catID        = intval($_POST['catID']);
      $fromQuestion = intval($_POST['fromQuestion']);

      $conditions = array();
      $conditions['userID']['value'] = $uid;
      $conditions['userID']['sign']  = '=';

      $conditions['catID']['value'] = $catID;
      $conditions['catID']['sign']  = '=';

      if (isset($_GET['q']))
      {
        $conditions['search']['value'] = htmlspecialchars($_GET['q'], ENT_NOQUOTES);
        $conditions['search']['sign']  = '=';
      }

      $questions['data'] = self::get_answers($conditions, ($catID > 0) ? self::$ORDER_BY_DATE : self::$ORDER_BY_LIKE, $fromQuestion, $this->GET_ROWS_COUNT);
      Controller_Users::set_full_avatar_list_path($questions['data']);

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
