<?php defined('SYSPATH') or die('No direct script access.');

/**
 * SettingsControl — A config manager.
 *
 * @package    Settings
 * @category   Controllers
 */
class Controller_SettingsControl extends Controller {
    
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
        $config = Kohana::$config->load('default');
        $view = View::factory('settings_control/main')->bind('config',$config);
        $this->response->body($view->render());
    }
    
    public function action_ajax_save_settings() {
        if ($this->request->is_ajax()) {
            $config = Kohana::$config->load('default');
            
            $config['SMTP']['to'] = Arr::get($_POST,'to');
            $config['SMTP']['options']['hostname'] = Arr::get($_POST,'hostname');
            $config['SMTP']['options']['to'] = Arr::get($_POST,'port');
            $config['SMTP']['options']['to'] = Arr::get($_POST,'username');
            $config['SMTP']['options']['to'] = Arr::get($_POST,'password');
            $config['SMTP']['options']['to'] = Arr::get($_POST,'encryption');
            
            $path = Kohana::find_file('config', 'default');
            $config = str_replace('));',');',str_replace('Config_Group::__set_state(','',var_export($config, true)).";");
            file_put_contents($path[0], "<?php defined('SYSPATH') OR die('No direct script access.'); return ".$config);
            
            
            //Kohana::config_set('default', $config);
            
            $this->response->body(json_encode(array('status' => true, 'message' => 'Настройки сохранены')));
        }
    }
    
    
    
    
}