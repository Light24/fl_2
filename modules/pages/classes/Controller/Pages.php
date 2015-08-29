<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Pages — A content management system module.
 *
 * @package    Pages
 * @category   Controllers
 */
class Controller_Pages extends Controller
{
    
    public function before() {
        parent::before();
    }

    public function action_index() {
        $page = Pages::getPageById($this->request->param('page_id'));

//        $pageView = Pages::getView($page->pageTemplate);
//        $pageView->set('page', $page);
//        
//        $mainView = Pages::getView($page->mainTemplate);
//        $mainView->set('page', $page);
//        $mainView->set('content', $pageView->render());
//        
//        $this->response->body($mainView->render());
        $this->response->body($page->render());
    }
    
}