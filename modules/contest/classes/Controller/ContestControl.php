<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * MenusControl — A menus management system module control panel controller.
 *
 * @package    Menus
 * @category   Controllers
 */
class Controller_ContestControl extends Controller {

    public function before()
    {
        parent::before();
        $auth = Auth::instance();
        if (!$auth->logged_in())
        {
            HTTP::redirect('/admin/login');
        }
    }
    
    public function action_index() {
        $view = View::factory('contest_control/main');
        $this->response->body($view->render());
    }

    public function action_ajax_contests_list() {
        $result = array();
        $data = array();
        $contests = Contests::getContestsList();

        foreach ($contests as $contestId => $contest) {
            $data[] = array(
                'id' => $contestId,
                'category' => $contest['category']
            );
        }
        $result['data'] = $data;
        $result['total'] = Contests::getContestsCount();
        $result['sort'] = $this->request->query('sort');
        $this->response->body(json_encode($result));
    }

    public function action_ajax_contests_delete() {
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            Contests::deleteContest($id);
            $this->response->body(json_encode(array('status' => true, 'message' => 'Категория удалена')));
        } else {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите категорию')));
        }
    }
    
      
    
    public function action_ajax_contests_deletework() {
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            Contests::deleteWork($id);
            $this->response->body(json_encode(array('status' => true, 'message' => 'Вопрос удален')));
        } else {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите вопрос')));
        }
    }
    
      
    public function action_ajax_contests_deletelike() {
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            Contests::deleteLike($id);
            $this->response->body(json_encode(array('status' => true, 'message' => 'Лайк удалён')));
        } else {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите лайк')));
        }
    }
    
     public function action_ajax_contests_deletelikey() {
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            Contests::deleteLikey($id);
            $this->response->body(json_encode(array('status' => true, 'message' => 'Ответ удалён')));
        } else {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите ответ')));
        }
    }
    
    
    public function action_ajax_contests_worksgrid() {
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            $view = View::factory('contest_control/works');
            $contest = Contests::getContestById($id);
            $view->set('contest', $contest);
            $this->response->body($view->render());
        } else {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите категорию')));
        }
    
    }
    
    public function action_ajax_contests_likesgrid() {
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            $view = View::factory('contest_control/likes');
            $work = Contests::getWorkById($id);
            $view->set('work', $work);
            $this->response->body($view->render());
        } else {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите вопрос')));
        }
    }
    
    
    public function action_ajax_contests_likeygrid() {
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            $view = View::factory('contest_control/likey');
            $work = Contests::getWorkById($id);
            $view->set('work', $work);
            $this->response->body($view->render());
        } else {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите ответ')));
        }
    }
    
      
    public function action_ajax_contests_works() {
        $result = array();
        $data = array();
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            $works = Contests::getWorksListByContest($id);

            foreach ($works as $workId => $work) {
                $data[] = array(
                    'id' => $workId,
                    'text_q' => $work['text_q'],
                    'user' => $work['user'],
                    'datePost' => $work['date_post'],                    
                    'likes' => $work['likes'],  
                    'likey' => $work['likey'], 
                    'liken' => $work['liken'], 
                    
                );
               
            } 
            $result['data'] = $data;
            $result['total'] = Contests::getWorksListByContestCount($id);
            $result['sort'] = $this->request->query('sort');
            $this->response->body(json_encode($result));
        }
        else
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите категорию')));
        }
    }
    
    public function action_ajax_contests_likes() {
        $result = array();
        $data = array();
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            $likes = Contests::getLikesListByWork($id);

            foreach ($likes as $likeId => $like) {
                $data[] = array(
                    'id' => $like['id'],
                    'user' => $like['user'],
                    'date' => $like['date_post'],
                    'ip' => $like['ip'],
                    'useragent' => $like['useragent'],
                );
            }
            $result['data'] = $data;
            $result['total'] = Contests::getLikesListByWorkCount($id);
            $result['sort'] = $this->request->query('sort');
            $this->response->body(json_encode($result));
        }
        else
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите вопрос')));
        }
    }
    
    
     public function action_ajax_contests_likey() {
        $result = array();
        $data = array();
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            $likes = Contests::getLikesyListByWork($id);

            foreach ($likes as $likeId => $like) {
                $data[] = array(
                    'id' => $like['id'],
                    'user' => $like['user'],
                    'date' => $like['date_post'],
                    'ip' => $like['ip'],
                    'useragent' => $like['useragent'],
                );
            }
            $result['data'] = $data;
            $result['total'] = Contests::getLikesListByWorkCount($id);
            $result['sort'] = $this->request->query('sort');
            $this->response->body(json_encode($result));
        }
        else
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите вопрос')));
        }
    }
    
    
   

    public function action_ajax_contests_form() {
        $id = $this->request->param('overflow');
        $view = View::factory('contest_control/form_contest');
        if (isset($id) && !empty($id))
        {
            $contest = Contests::getContestById($id);
            if (isset($contest))
            { 
                $view->set('contest', $contest);
                $this->response->body($view->render());
            }
            else
            {
                $this->response->body('Категория не найден');
            }
        }
        else
        {
           $contest = new stdClass();
           $contest->id = '';
           $contest->category = '';
          
           $view->set('contest', $contest);
           $this->response->body($view->render());
        }
    }
    
  
    public function action_ajax_contests_workform() {
        $contestId = Arr::get($_REQUEST,'contestId');
        if (isset($contestId) && !empty($contestId))
        {
            $contest = Contests::getContestById($contestId);
            if (isset($contest))
            {
                $id = $this->request->param('overflow');
                $view = View::factory('contest_control/form_work');
                if (isset($id) && !empty($id))
                {
                    $work = Contests::getWorkById($id);
                    if (isset($work))
                    {
                        $view->set('work', $work);
                        $view->set('contest', $contest);
                        $this->response->body($view->render());
                    }
                    else
                    {
                        $this->response->body('Работа не найдена');
                    }
                }
                else
                {
                   $work = Contests_Work::fromArray(array());
                   $view->set('work', $work);
                   $view->set('contest', $contest);
                   $this->response->body($view->render());
                }
            }
            else
            {
                $this->response->body('Категория не найден');
            }
        }
        else
        {
            $this->response->body('Выберите категорию');
        }
    }
    
   
    public function action_ajax_save_contest() {
        if ($this->request->is_ajax()) {
            $validation = Validation::factory($this->request->post());
            $validation
                    ->rule('category', 'not_empty');
                   
            if ($validation->check()) {
                $id = $this->request->post('id');
                if (!empty($id)) {
                    $contest = Contests::getContestById($id);
                } else {
                    $contest = Contests::createContest(
                        $this->request->post('category')
                    );
                }
                if (!isset($contest)) {
                    $this->response->body(json_encode(array('status' => false, 'message' => 'Категория не найдена')));
                    return;
                }

                $contest->category = $this->request->post('category');
                                
                $contest->save();
               
            } else {
                $errors = $validation->errors('contests');
                $errorText = implode('<br>', array_values($errors));
                $this->response->body(json_encode(array('status' => false, 'message' => $errorText)));
                return;
            }
            $this->response->body(json_encode(array('status' => true, 'message' => 'Категория сохранена', 'id' => $contest->id)));
        }
    }
    
        
    public function action_ajax_save_work() {
        if ($this->request->is_ajax()) {
            $validation = Validation::factory($this->request->post());
            $validation
                    ->rule('text_q', 'not_empty')
                    ->rule('user_id', 'not_empty')
                    ->rule('user_id', 'Contests::checkUserId', array($this->request->post('user_id')));

            if ($validation->check()) {
                $id = $this->request->post('id');
                if (!empty($id)) {
                    $work = Contests::getWorkById($id);
                } else {
                    $work = Contests::createWork(
                        $this->request->post('text_q'), $this->request->post('contest_id'), $this->request->post('user_id')
                    );
                }
                if (!isset($work)) {
                    $this->response->body(json_encode(array('status' => false, 'message' => 'Вопрос не найден')));
                    return;
                }

                $work->user_id = $this->request->post('user_id');
                $work->text_q = $this->request->post('text_q');
                
                $work->save();
            } else {
                $errors = $validation->errors('contests');
                $errorText = implode('<br>', array_values($errors));
                $this->response->body(json_encode(array('status' => false, 'message' => $errorText)));
                return;
            }
            
            $this->response->body(json_encode(array('status' => true, 'message' => 'Работа сохранена', 'id' => $work->id)));
        }
    }
    
    
}