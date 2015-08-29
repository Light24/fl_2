<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * UsersControl — contest users
 *
 * @package    Users
 * @category   Controllers
 */
class Controller_UsersControl extends Controller {

    public function before() {
        parent::before();
        $auth = Auth::instance();
        if (!$auth->logged_in()) {
            HTTP::redirect('/admin/login');
        }
    }

    public function action_index() {
        $view = View::factory('users/main');
        $this->response->body($view->render());
    }

    public function action_ajax_users_select() {
        $view = View::factory('users/selectUsers');
        $this->response->body($view->render());
    }

    public function action_ajax_users_list() {
        $result = array();
        $data = array();
        $users = Users::getUsersList();

        foreach ($users as $userId => $user) {
            $user = Users_User::fromArray($user);

            $data[] = array(
            'id' => $userId,
            'fio' => $user->fio,
            'email' => $user->email,
            'city' => $user->city,
            'sex' => $user->sex,
            'date_birth' => $user->date_birth,
            'confirmed' => $user->confirmed,
            'socialLinks' => $user->provider_vk.' '.$user->provider_fb.$user->provider_tw,
            'points'=>  $user->points,  
            'last_activity'=>  $user->last_activity,
            'login'=>$user->login
            );
        }
        $result['data'] = $data;
        $result['total'] = Users::getUsersCount();
        $result['sort'] = $this->request->query('sort');
        $this->response->body(json_encode($result));
    }

    public function action_ajax_users_form() {
        $id = $this->request->param('overflow');
        $view = View::factory('users/form_user');
        if (isset($id) && !empty($id)) {
            $user = Users::getUserById($id);
            if (isset($user)) {
                $view->set('user', $user);
                $this->response->body($view->render());
            } else {
                $this->response->body('Пользователь не найден');
            }
        } else {
            $user = Users_User::fromArray(array());
            $view->set('user', $user);
            $this->response->body($view->render());
        }
    }

    public function action_ajax_save_user() {
        if ($this->request->is_ajax()) {
            $newUser = false;
            $validation = Validation::factory($this->request->post());
            $validation
                    ->rule('fio', 'not_empty')
                    ->rule('login', 'not_empty');
            $email = Arr::get($_POST, 'email');
            $login = Arr::get($_POST, 'login'); 
            if (!empty($email))
                $validation->rule('email', 'Users::checkEmailDoubles', array($this->request->post('email'), $this->request->post('id')));
  
            
            if (!empty($login))
                $validation->rule('email', 'Users::checkLoginDoubles', array($this->request->post('login'), $this->request->post('id')));
  
            $id = $this->request->post('id');
            if (empty($id)) {
                //$validation->rule('password', 'not_empty');
                $newUser = true;
            }
            if ($validation->check()) {
                if (!empty($id)) {
                    $user = Users::getUserById($id);
                } else {
                    $user = Users::createUser(
                    $this->request->post('fio'), 
                    $this->request->post('date_birth'), 
                    $this->request->post('city'), 
                    $this->request->post('sex'), 
                    $this->request->post('email'), 
                    $this->request->post('password'), 
                    $this->request->post('confirmed'), 
                    $this->request->post('points'),
                    $this->request->post('login')
                    
                    );
                }
                if (!isset($user)) {
                    $this->response->body(json_encode(array('status' => false, 'message' => 'Пользователь не найден')));
                    return;
                }

                $user->fio = $this->request->post('fio');
                $user->email = $this->request->post('email');
                $user->sex = $this->request->post('sex');
                $user->date_birth = $this->request->post('date_birth');
                $password = $this->request->post('password');
                if ($newUser === true || !empty($password))
                    $user->password = $this->request->post('password');
               
                $user->city = $this->request->post('city');
                $user->photo = $this->request->post('photo');
                
                $user->confirmed = $this->request->post('confirmed');
                $user->points = $this->request->post('points');
                $user->login = $this->request->post('login');
                $user->save();
            } else {
                $errors = $validation->errors('users');
                $errorText = implode('<br>', array_values($errors));
                $this->response->body(json_encode(array('status' => false, 'message' => $errorText)));
                return;
            }
            $this->response->body(json_encode(array('status' => true, 'message' => 'Пользователь сохранён', 'id' => $user->id)));
        }
    }

    public function action_ajax_users_delete() {
        $id = $this->request->param('overflow');
        $id = (int) $id;
        if (isset($id) && !empty($id)) {
            Users::deleteUser($id);
            $this->response->body(json_encode(array('status' => true, 'message' => 'Пользователь удалён')));
        } else {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите пользователя')));
        }
    }

}