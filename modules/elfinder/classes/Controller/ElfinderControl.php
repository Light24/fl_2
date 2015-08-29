<?php defined('SYSPATH') or die('No direct script access.');

/**
 * ElfinderControl — A file manager.
 *
 * @package    Elfinder
 * @category   Controllers
 */
class Controller_ElfinderControl extends Controller {
    
    public function before()
    {
        parent::before();
        $auth = Auth::instance();
        if (!$auth->logged_in())
        {
            HTTP::redirect('/admin/login');
        }
    }
    
    public function action_index()
    {
        $view = View::factory('elfinder_control/main');
        $this->response->body($view->render());
    }
    
}