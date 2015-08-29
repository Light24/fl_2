<?php defined('SYSPATH') or die('No direct script access.');
/**
 * ControlCenter — A kohana administration system module.
 *
 * @package    ControlCenter
 * @category   Controllers
 */
class Controller_ControlCenter extends Controller
{
    /**
     * Config
     * @var Kohana_Config_Group
     */
    public $config = array();
    
    /**
     * Auth
     * @var Auth
     */
    public $auth;
    
    public function before()
    {
        parent::before();
        $this->config = ControlCenter::$config;
        $this->auth = Auth::instance();
    }
    
    public function action_index()
    {
        if (!$this->auth->logged_in())
        {
            HTTP::redirect('/admin/login');
        }
        if ($this->request->param('path') == '')
        {
            //HTTP::redirect('/admin/controlcenter/modules');
            HTTP::redirect('/admin/pages');
        }
        $view = View::factory('control_center/main');
        $view->set('mainTitle', Arr::get($this->config, 'MAIN_TITLE'));
        $view->set('modules', ControlCenter::getModules());
        $view->set('topModules', ControlCenter::getTopModules());
        $this->response->body($view->render());
    }

    public function action_login()
    {
        if ($this->auth->logged_in())
        {
            $this->auth->logout();
        }
        if ($this->request->method() == Request::POST)
        {
            $result = $this->auth->login(
                    $this->request->post('login'),
                    $this->request->post('password'));
            HTTP::redirect('/admin');
            //$this->response->body($this->auth->hash($this->request->post('password')));
            //return;
        }
        $view = View::factory('control_center/login');
        $view->set('mainTitle', Arr::get($this->config, 'MAIN_TITLE'));
        $this->response->body($view->render());
    }
    
    public function action_modules()
    {
        $view = View::factory('control_center/control_center_main');
        $view->set('activeTab', 'modules');
        $view->set('activeTabUrl', '/admin/module/controlcenter/ajax_modules');
        $this->response->body($view->render());
    }
    
    public function action_system()
    {
        $view = View::factory('control_center/control_center_main');
        $view->set('activeTab', 'system');
        $view->set('activeTabUrl', '/admin/module/controlcenter/ajax_system');
        $this->response->body($view->render());
    }

    public function action_ajax_modules()
    {
        $view = View::factory('control_center/control_center_modules');
        $view->set('modules', ControlCenter::getModules());
        $this->response->body($view->render());
    }
    
    public function action_ajax_system()
    {
        $view = View::factory('control_center/control_center_system');
        $this->response->body($view->render());
    }
}