<?
defined('SYSPATH') or die();

class Controller_Jslogin extends Controller
{
  public function before()
  {
    if (!$this->request->is_initial())
      die();

    parent::before();
  }

  public function action_social_auth()
  {
    $social_name = htmlspecialchars($this->request->param('social_name'), ENT_NOQUOTES);
    $links = Jslogin::instance()->get_authorization_links();
    if (!isset($links[$social_name]))
    {
      die();
    }

    $this->redirect($links[$social_name]);
  }


  public function action_social_registration()
  {
    $social_name = htmlspecialchars($this->request->param('social_name'), ENT_NOQUOTES);
    $links = Jslogin::instance()->get_register_links();
    if (!isset($links[$social_name]))
    {
      die();
    }

    $this->redirect($links[$social_name]);
  }
}
?>