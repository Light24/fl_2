<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Contest extends Controller_Common {

    public $connect = null;

    public function before()
    {
        parent::before();
    }

    protected function isValidIP($ip) {
        $pattern = "/^([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})(\.([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})){3}$/";
        return (preg_match($pattern, $ip) > 0) ? true : false;
    }

    protected function getIp() {
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

    protected function _save_image($image) {

        if (
                !Upload::valid($image) OR
                !Upload::not_empty($image) OR
                !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            return FALSE;
        }
        $dir = DOCROOT . 'assets/default/avatar';
        if (!is_dir($dir))
            mkdir($dir);

        if ($file = Upload::save($image, NULL, $directory)) {
            $filename = strtolower(Text::random('alnum', 20)) . '.jpg';
            $image = Image::factory($file);
            if (($image->width > 640) && ($image->height > 800)) {
                $image->resize(640, 800, Image::INVERSE)
                        ->save($directory . $filename);
            } else if (($image->width <= 640) && ($image->height > 800)) {
                $image->resize(NULL, 800, Image::INVERSE)
                        ->save($directory . $filename);
            } else if (($image->width > 640) && ($image->height <= 800)) {
                $image->resize(640, NULL, Image::INVERSE)
                        ->save($directory . $filename);
            } else if (($image->width <= 640) && ($image->height <= 800)) {
                $image->save($directory . $filename);
            }

            unlink($file);

            return $filename;
        }

        return FALSE;
    }

    public function action_index() {
    }

    public function action_social_auth() {

        $this->template->pageTitle = 'Регистрация';
        $flag = 0;
        $error = '';
        $postToken = htmlspecialchars((Arr::get($_POST, 'token')), ENT_NOQUOTES);

        if (!isset($_POST['token'])) {
            $error = 'Ошибка получения ответа от социальной сети.';
        } elseif (false === ($authData = file_get_contents('http://loginza.ru/api/authinfo?token=' . $postToken))) {
            $error = 'Ошибка получения данных.';
        }

        if ($error != '') {
            $html = View::factory($this->tpl . '/socialAuth', array('error' => $error
            ));
            $this->template->content = $html;
        }
        $user = json_decode($authData);

        $data = array();
        //если провайдер Вконтакте
        if (isset($user->provider)) {
            if ($user->provider == 'http://vk.com/') {

                $data['uid_vk'] = $user->uid;
                $data['provider'] = $user->provider;
                $data['firstname'] = $user->name->last_name;
                $data['lastname'] = $user->name->first_name;
                $data['identity_vk'] = $user->identity;
                $query = DB::select()->from('users')->where('provider_vk', '=', $user->identity)
                                ->execute()->as_array();
                $count = count($query);


                if ($count == 0) {
                    $first_name = $user->name->first_name;
                    $last_name = $user->name->last_name;
                    $fio = $first_name . ' ' . $last_name;
                    $gender = $user->gender;
                    $uid = $user->uid;
                    $email = $user->email;
                    $identity = $user->identity;

                    if ($gender == 'М') {
                        $gender = 'мужской';
                    } else {
                        $gender = 'женский';
                    }
                    $photo = $user->photo;

                    $this->template->pageTitle = 'Регистрация';

                    $this->template->scripts = array(
                    );

                    $html = View::factory($this->tpl . '/registration', array(
                                'fio' => $fio,
                                'uid_vk' => $uid,
                                'provider_vk' => $identity,
                                'gender' => $gender,
                                'photo' => $photo,
                                'email' => $email
                    ));

                    $this->template->content = $html;
                } else {
                    Controller_Contest::updateSession($query);
                    HTTP::redirect("/cabinet");
                }
            }
            //если провайдер Facebook
            elseif ($user->provider == 'http://www.facebook.com/') {

                $data['uid_fb'] = $user->uid;
                $data['provider'] = $user->provider;
                $data['firstname'] = $user->name->last_name;
                $data['lastname'] = $user->name->first_name;
                $data['identity_fb'] = $user->identity;

                $query = DB::select()->from('users')->where('provider_fb', '=', $user->identity)
                        ->execute();
                $count = count($query);


                if ($count == 0) {

                    $fio = $user->name->full_name;
                    $gender = $user->gender;
                    $uid = $user->uid;
                    $identity = $user->identity;

                    if ($gender == 'М') {
                        $gender = 'мужской';
                    } else {
                        $gender = 'женский';
                    }
                    $photo = $user->photo;
                    $email = $user->email;

                    $this->template->pageTitle = 'Регистрация';

                    $this->template->scripts = array(
                    );

                    $html = View::factory($this->tpl . '/registration', array(
                                'fio' => $fio,
                                'uid_fb' => $uid,
                                'provider_fb' => $identity,
                                'gender' => $gender,
                                'photo' => $photo,
                                'email' => $email
                    ));

                    $this->template->content = $html;
                } else {
                    Controller_Contest::updateSession($query);
                    HTTP::redirect("/cabinet");
                }
            }
            //Если провайдер Twitter
            elseif ($user->provider == 'http://twitter.com/') {
                $data['uid_tw'] = $user->uid;
                $data['provider'] = $user->provider;
                $data['firstname'] = $user->name->last_name;
                $data['lastname'] = $user->name->first_name;
                $data['identity_tw'] = $user->identity;

                $query = DB::select()->from('users')->where('provider_tw', '=', $user->identity)
                        ->execute();
                $count = count($query);

                if ($count > 0) {
                    
                } else {
                    Controller_Contest::updateSession($query);
                }
            } else {
                $data['error'] = 'Неизвестный провайдер.';
            }
        } else {
            $data['error'] = 'Неизвестный провайдер.';
        }

        //$html = View::factory($this->tpl . '/socialAuth', array());
        //$this->template->content = $html;
    }


    public function action_allQuestion() {


        $this->template->pageTitle = 'Все вопросы';

        $this->template->scripts = array(
        );
        //популярные
        $questions = DB::query(Database::SELECT, "SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
            `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`, photos_q.*
            FROM `question`
            LEFT JOIN `users` ON question.user_id = users.id
            LEFT JOIN `category` ON question.contest_id = category.id
            LEFT JOIN `photos_q` ON question.id = photos_q.question_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
            ON question.id = l.work_id
            ORDER BY question.date_post DESC ")->execute()->as_array();
        $html = View::factory($this->tpl . '/allQ', array(
                    'all_question' => $questions,
        ));

        $this->template->content = $html;
    }

    public function action_search() {

        $q = htmlspecialchars(Arr::get($_GET, 'q'), ENT_NOQUOTES);
        if ($q == '') {
            HTTP::redirect("/");
        }
         $plusSearch='';
         if (Arr::get($_GET, 'tid') != '') {
            $plusSearch = ' `contest_id`=' . Arr::get($_GET, 'tid') . ' AND ';
        }
        
        $this->template->pageTitle = 'Результат поиска';

        $this->template->scripts = array(
        );

        $questions = DB::query(Database::SELECT, "SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
            `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`, photos_q.*
            FROM `question`
            LEFT JOIN `users` ON question.user_id = users.id
            LEFT JOIN `category` ON question.contest_id = category.id
            LEFT JOIN `photos_q` ON question.id = photos_q.question_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
            ON question.id = l.work_id
            WHERE $plusSearch `text_q` LIKE '%" . $q . "%'
            ORDER BY question.date_post DESC ")->execute()->as_array();

        $html = View::factory($this->tpl . '/allQ', array(
                    'all_question' => $questions,
                    'text' => 'Результаты поиска',
                    'countN' => count($questions)
        ));

        $this->template->content = $html;
    }

    public function action_user() {
        $id = htmlspecialchars(Arr::get($_GET, 'id'), ENT_NOQUOTES);
        if ($id == '') {
            HTTP::redirect("/404");
        }


        $queryResult = DB::select()->from('users')
                ->where('id', '=', $id)
        ;
        $best = Arr::get($_GET, 'best');
        if ($best == 1) {
            $best = " ORDER BY likey";
        } else {
            $best = " ORDER BY question.date_post";
        }
        $plusSearch = '';
        if (Arr::get($_GET, 'tid') != '') {
            $plusSearch = ' AND `contest_id`=' . Arr::get($_GET, 'tid') . ' ';
        }
        
        
        $queryResult = $queryResult->execute()->as_array();
        if (count($queryResult) == 1) {
            $user_question = DB::query(Database::SELECT, "SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
            `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`
            FROM `question`
            LEFT JOIN `users` ON question.user_id = users.id
            LEFT JOIN `category` ON question.contest_id = category.id
            
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
            ON question.id = l.work_id
            WHERE `user_id`=" . $id . $plusSearch . "
            $best DESC")->execute()->as_array();
        } else {
            HTTP::redirect("/404");
        }

        $this->template->pageTitle = 'Результат поиска';

        $this->template->scripts = array(
        );

        $html = View::factory($this->tpl . '/user', array(
                    'user' => $queryResult,
                    'user_question' => $user_question
        ));

        $this->template->content = $html;
    }


    public function action_confirmation() {
        $uid = (int) htmlspecialchars((Arr::get($_GET, 'id')), ENT_NOQUOTES);
        $hash = htmlspecialchars((Arr::get($_GET, 'hash')), ENT_NOQUOTES);
        if (($uid != '') && ($hash != '')) {

            $verfifcationHash = DB::select()->from('conrol_hash')
                            ->where("user_id", "=", $uid)->execute()->get('hash');

            if ($hash === $verfifcationHash) {
                $userUpgrade = DB::update('users')->set(array('confirmed' => 1))
                                ->where('id', '=', $uid)->execute();

                $query = DB::select()->from('users')->where("id", '=', $uid)->limit(1)->execute();

                if (count($query) == 1) {
                    Controller_Contest::updateSession($query);
                }

                DB::delete('conrol_hash')->where('user_id', '=', $uid)
                        ->where('hash', '=', $hash)
                        ->execute();


                HTTP::redirect("/avatar");
            } else {
                HTTP::redirect("/");
            }
        } else {
            HTTP::redirect("/");
        }
    }



    public function action_deletePhoto() {
        if (!$this->action_checkout()) {
            $output['success'] = false;
            $output['message'] = 'Неизвестная ошибка. Попробуйте позже';
        } else {
            if ($this->request->method() == 'POST') {
                $user = htmlspecialchars(Arr::get($_POST, 'idUser'), ENT_NOQUOTES);
                $photo = htmlspecialchars(Arr::get($_POST, 'photoId'), ENT_NOQUOTES);
                if ($_SESSION['id'] == $user) {
                    $query = DB::insert('deletePhoto', array('userId', 'photo'))
                                    ->values(array($user, $photo))->execute();
                    $output['success'] = true;
                    $output['message'] = 'Фото удалено';
                }
            } else {
                $output['success'] = false;
                $output['message'] = 'Неизвестная ошибка. Попробуйте позже';
            }
        }
        $output = json_encode($output);
        $this->response->body($output);
    }


    //Генерация даты для отображения
    public static function friendlyDate($date) {

        $month = explode(' ', $date);
        $month_d = explode('-', $month[0]);
        $numMonth = $month_d[1] * 10 / 10;
        $m = array(1 => 'января', 2 => 'февраля', 3 => 'марта', 4 => 'апреля',
            5 => 'мая', 6 => 'июня', 7 => 'июля', 8 => 'августа', 9 => 'сентября',
            10 => 'октября', 11 => 'ноября', 12 => 'декабря');

        $res = $month_d[2] . ' ' . $m[$numMonth] . ' ' . $month_d[0] . ' в ' . $month[1];
        return $res;
    }

    //Валидация даты рождения

    public static function validateBirthDate($validation, $field, $data) {

        $date = explode('-', $data['birthDate']);

        if (!checkdate($date[1], $date[2], $date[0])) {
            $validation->error($field, 'validateBirthDate');
            return false;
        }
        return true;
    }

    //дублирование емеил

    public static function emailDouble($validation, $field, $data) {
        $queryResult = DB::select(DB::expr('COUNT(*) as `count`'))->from('users')
                ->where('email', '=', $data['regEmail']);
        $queryResult = $queryResult->execute();
        $res = $queryResult->current();
        if ($res['count'] > 0)
            return false;
        else
            return true;
    }

    //дублирование login

    public static function loginDouble($validation, $field, $data) {
        $queryResult = DB::select(DB::expr('COUNT(*) as `count`'))->from('users')
                ->where('login', '=', $data['regLogin']);
        $queryResult = $queryResult->execute();
        $res = $queryResult->current();
        if ($res['count'] > 0)
            return false;
        else
            return true;
    }


    public function action_about() {


        $this->template->pageTitle = 'Правила сайта';

        $this->template->scripts = array(
        );
        //популярные
        $questions = DB::query(Database::SELECT, "SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
            `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`, photos_q.*
            FROM `question`
            LEFT JOIN `users` ON question.user_id = users.id
            LEFT JOIN `category` ON question.contest_id = category.id
            LEFT JOIN `photos_q` ON question.id = photos_q.question_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
            ON question.id = l.work_id
            ORDER BY question.date_post DESC ")->execute()->as_array();
        $html = View::factory($this->tpl . '/about', array(
                    'all_question' => $questions,
        ));

        $this->template->content = $html;
    }


    public function action_help() {


        $this->template->pageTitle = 'Помощь';

        $this->template->scripts = array(
        );
        //популярные
        $questions = DB::query(Database::SELECT, "SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
            `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`, photos_q.*
            FROM `question`
            LEFT JOIN `users` ON question.user_id = users.id
            LEFT JOIN `category` ON question.contest_id = category.id
            LEFT JOIN `photos_q` ON question.id = photos_q.question_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
            ON question.id = l.work_id
            ORDER BY question.date_post DESC ")->execute()->as_array();
        $html = View::factory($this->tpl . '/help', array(
                    'all_question' => $questions,
        ));

        $this->template->content = $html;
    }


    public function action_contact() {


        $this->template->pageTitle = 'Контакты';

        $this->template->scripts = array(
        );
        //популярные
        $questions = DB::query(Database::SELECT, "SELECT question.*,question.id as uidQuest, category.*,users.*, users.fio as `user`,
            `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`, photos_q.*
            FROM `question`
            LEFT JOIN `users` ON question.user_id = users.id
            LEFT JOIN `category` ON question.contest_id = category.id
            LEFT JOIN `photos_q` ON question.id = photos_q.question_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
            ON question.id = l.work_id
            ORDER BY question.date_post DESC ")->execute()->as_array();
        $html = View::factory($this->tpl . '/contact', array(
                    'all_question' => $questions,
        ));

        $this->template->content = $html;
    }


}

// End Actions