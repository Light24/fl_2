<?

class Controller_Jslogin extends Controller
{
/********************************************************** Авторизация через vk **********************************************************/

    public function action_js_register()
    {
    exit(0);
      $question = Request::factory("module_users/social_registration")->execute();
    }
}

?>