<?php defined('SYSPATH') or die('No direct script access.');

/**
 * PagesControl — A content management system module control panel controller.
 *
 * @package    Pages
 * @category   Controllers
 */
class Controller_PagesControl extends Controller {
    
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
        $this->response->headers('Cache-Control', 'no-cache');
        $view = View::factory('pages_control/main');
        $this->response->body($view->render());
    }
    
    private function getTree($id = null)
    {
        $data = array();
        if (!isset($id)) {
            $childPages = Pages::getChildCategories();
            if (count($childPages) != 0)
            {
                $hasChild = true;
            }
            else
            {
                $hasChild = false;
            }
            $data[] = array(
                'id' => -1,
                'title' => 'Корень',
                'hasChild' => $hasChild,
                'childs' => $hasChild ? $this->getTree(-1) : null
            );
            return $data;
            return;
        }
        else if ($id == -1)
        {
            $id = null;
        }
        $pages = Pages::getChildCategories($id);
        foreach ($pages as $pageId => $page)
        {
            $childPages = $page->getChildCategories();
            if (count($childPages) != 0)
            {
                $hasChild = true;
            }
            else
            {
                $hasChild = false;
            }
            $data[] = array(
                'id' => $pageId,
                'title' => htmlspecialchars_decode($page->title),
                'hasChild' => $hasChild,
                'childs' => $hasChild ? $this->getTree($pageId) : null
            );
        }
        return $data;
    }
    
    public function action_ajax_full_tree()
    {
        $this->response->body(json_encode($this->getTree()));
    }
    
    public function action_ajax_tree()
    {
        $id = $this->request->query('id');
        $data = array();
        if (!isset($id)) {
            $childPages = Pages::getRootPages(0, 0, true);
            $hasChild = false;
            if (count($childPages) != 0)
            {
                $hasChild = true;
            }
            $data[] = array(
                'id' => -1,
                'title' => 'Корень',
                'hasChild' => $hasChild
            );
            $this->response->body(json_encode($data));
            return;
        }
        else if ($id == -1)
        {
            $id = null;
        }
        $pages = Pages::getChildPages($id, 0, 0, true);
        foreach ($pages as $pageId => $page)
        {
            $childPages = $page->getChildPages(0, 0, true);
            $hasChild = false;
            if (count($childPages) != 0)
            {
                $hasChild = true;
            }
            $data[] = array(
                'id' => $pageId,
                'title' => htmlspecialchars_decode($page->title),
                'hasChild' => $hasChild
            );
        }
        $this->response->body(json_encode($data));
    }
    
    public function action_ajax_list()
    {
        $result = array();
        $data = array();
        $take = $this->request->query('take');
        $skip = $this->request->query('skip');
        $parent_id = $this->request->query('parent_id');
        
        if ($parent_id == -1)
        {
            $parent_id = null;
        }
        $pages = Pages::getChildPages($parent_id, $skip, $take, true);
        
        foreach($pages as $pageId => $page)
        {
            $data[] = array(
                'id' => $pageId,
                'title' => htmlspecialchars_decode($page->title),
                'url' => $page->url
            );
        }
        $result['data'] = $data;
        $result['total'] = Pages::getPagesCount();
        $result['sort'] = $this->request->query('sort');
        $this->response->body(json_encode($result));
    }
    
    public function action_edit_page()
    {
        $view = View::factory('pages_control/edit_page');
        $id = $this->request->query('id');
        if (isset($id))
        {
            $page = Pages::getPageById($id);
            if (isset($page))
            {
                $view->set('page', $page);
                $this->response->body($view->render());
            }
            else
            {
                $this->response->body('Page not found');
            }
        }
        else
        {
            $page = new stdClass();
            $page->id = '';
            $page->parentId = '';
            $page->title = '';
            $page->url = '';
            $page->shortUrl = '';
            $page->visible = 1;
            $page->searchable = 1;
            $page->_mainTemplate = '';
            $page->_pageTemplate = '';
            $page->default_mainTemplate = '';
            $page->default_pageTemplate = '';
            $page->prevText = '';
            $page->fullText = '';
            $page->_fullText = '';
            $view->set('page', $page);
            $this->response->body($view->render());
        }   
    }
    
    public function action_delete_page()
    {
        $id = $this->request->query('id');
        if(isset($id))
        {
            $id = (int)$id;
            Pages::deletePage($id);
            $this->response->body(json_encode(array('status' => true, 'message' => 'Страница удалена')));
        }
        else
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите страницу')));
        }
    }
    
    public function action_update_page()
    {
        if ($this->request->is_ajax())
        {
            $validation = Validation::factory($this->request->post());
            $validation
                    ->rule('title', 'not_empty')
                    ->rule('url', 'not_empty')
                    ->rule('url', 'regex', array(':value', '/^[A-Za-z0-9\-_]+$/u'))
                    ->rule('short_url', 'regex', array(':value', '/^[A-Za-z0-9\-_\/]+$/'));
                    
            if ($validation->check())
            {
                $id = $this->request->post('id');
                if (!empty($id))
                {
                    $page = Pages::getPageById($id);
                }
                else
                {
                    $page = Pages::createPage($this->request->post('title'), $this->request->post('url'));
                }
                if (!isset($page))
                {
                    $this->response->body(json_encode(array('status' => false, 'message' => 'Страница не найдена')));
                    return;
                }
                $parent = Pages::getPageById($this->request->post('parent_id'));
                while(isset($id) AND isset($parent))
                {
                    if($parent->id == $id) {
                        $this->response->body(json_encode(array('status' => false, 'message' => 'Недопустимо назначать редактируемую или дочернюю страницу в качестве родительской')));
                        return;
                    }
                    $parent = $parent->getParentPage();
                }
                $page->title = $this->request->post('title');
                $page->url = $this->request->post('url');
                $page->parentId = $this->request->post('parent_id');
                $page->shortUrl = $this->request->post('short_url');
                $page->visible = $this->request->post('visible');
                $page->searchable = $this->request->post('searchable');
                $page->mainTemplate = $this->request->post('main_template');
                $page->pageTemplate = $this->request->post('page_template');
                $page->default_mainTemplate = $this->request->post('default_main_template');
                $page->default_pageTemplate = $this->request->post('default_page_template');
                $page->prevText = $this->request->post('prev_text');
                $page->fullText = $this->request->post('full_text');
                $page->save();
            }
            else
            {
                $errors = $validation->errors('pages');
                $errorText = implode('<br>', array_values($errors));
                $this->response->body(json_encode(array('status' => false, 'message' => $errorText)));
                return;
            }
            $this->response->body(json_encode(array('status' => true, 'message' => 'Страница сохранена', 'page' => $page->id)));
        }
    }
    
}