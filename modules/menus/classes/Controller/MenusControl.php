<?php defined('SYSPATH') or die('No direct script access.');

/**
 * MenusControl — A menus management system module control panel controller.
 *
 * @package    Menus
 * @category   Controllers
 */
class Controller_MenusControl extends Controller {
    
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
        $view = View::factory('menus_control/main');
        $this->response->body($view->render());
    }
    
    public function action_edit_menu()
    {
        $view = View::factory('menus_control/edit_menu');
        $view->set('menuId', $this->request->param('menu_id'));
        $this->response->body($view->render());
    }
    
    public function action_ajax_menus_list()
    {
        $data = array();
        $menus = Menus::getMenus();
        foreach($menus as $menuId => $menu)
        {
            $data[] = array(
                'id' => $menuId,
                'name' => $menu->name,
                'description' => $menu->description,
                'template' => $menu->template
            );
        }
        $result = array(
            'total' => count($data),
            'data' => $data,
        );
        $this->response->body(json_encode($result));
    }
    
    public function action_ajax_menu_add()
    {
        $menuName = $this->request->post('name');
        $menuDescription = $this->request->post('description');
        $menuTemplate = $this->request->post('template');
        $menu = Menus::getMenuByName($menuName);
        if(isset($menu))
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Такое имя уже используется')));
            return;
        }
        if(empty($menuDescription))
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите описание меню')));
            return;
        }
        $menu = Menus::createMenu(array(
            'name' => $menuName,
            'description' => $menuDescription,
            'template' => $menuTemplate,
        ));
        if(isset($menu))
        {
            $this->response->body(json_encode(array('status' => true, 'message' => 'Меню создано', 'id' => $menu->id)));
        }
        else
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Не удалось создать меню')));
        }
    }
    
    public function action_ajax_menu_edit()
    {
        $menuId = $this->request->post('id');
        $menuName = $this->request->post('name');
        $menuDescription = $this->request->post('description');
        $menuTemplate = $this->request->post('template');
        $menu = Menus::getMenuByName($menuName);
        if(isset($menu) AND ($menu->id != $menuId))
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Такое имя уже используется')));
            return;
        }
        if(empty($menuDescription))
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Укажите описание меню')));
            return;
        }
        $menu = Menus::getMenuById($menuId);
        if(isset($menu))
        {
            $menu->name = $menuName;
            $menu->description = $menuDescription;
            $menu->template = $menuTemplate;
            $menu->save();
            $this->response->body(json_encode(array('status' => true, 'message' => 'Изменения сохранены')));
            return;
        }
        else
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Меню еще не создано или уже удалено')));
            return;
        }
    }
    
    public function action_ajax_menu_delete()
    {
        $menuId = $this->request->post('id');
        $menu = Menus::getMenuById($menuId);
        if(isset($menu))
        {
            $menu->delete();
            $this->response->body(json_encode(array('status' => true, 'message' => 'Меню удалено')));
            return;
        }
        else
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Меню еще не создано или уже удалено')));
            return;
        }
    }
    
    public function action_ajax_items_list()
    {
        $data = array();
        $menu = Menus::getMenuById($this->request->query('menuId'));
        if(!isset($menu))
        {
            $result = array(
                'total' => 0,
                'data' => array(),
            );
            $this->response->body(json_encode($result));
            return;
        }
        $items = $menu->getItems($this->request->query('id'));
        foreach($items as $itemId => $item)
        {
            if($item->url_type == 'pages_page')
            {
                $page = Pages::getPageById($item->url);
                if(isset($page))
                {
                    $url = $page->title;
                }
                else
                {
                    $url = 'Страница не найдена';
                }
            }
            else
            {
                $url = $item->url;
            }
            $parentItem = Menus::getItemById($item->parentId);
            if(isset($parentItem))
            {
                $parentItemName = $parentItem->title;
            }
            else
            {
                $parentItemName = '';
            }
            $data[] = array(
                'id' => $itemId,
                'menu' => $item->menuId,
                'parentId' => $item->parentId,
                'parentName' => $parentItemName,
                'position' => $item->position,
                'title' => $item->title,
                'url_type' => $item->url_type,
                'url' => $item->url,
                'urlTitle' => $url,
                'image' => $item->image,
                'tooltip' => $item->tooltip,
                'options' => $item->options
            );
        }
        $result = array(
            'total' => count($data),
            'data' => $data,
        );
        $this->response->body(json_encode($result));
    }

    /**
     * 
     * @param Menus_Menu $menu
     * @param Menus_Item $item
     * @return array
     */
    private function getItemsTree($menu, $item)
    {
        $result = array();
        if(isset($item))
        {
            $items = $item->getItems();
        }
        else
        {
            $items = $menu->getItems();
        }
        foreach($items as $subItemId => $subItem)
        {
            $childs = $this->getItemsTree($menu, $subItem);
            $result[] = array(
                'id' => $subItemId,
                'title' => $subItem->title,
                'hasChild' => count($childs) != 0,
                'childs' => $childs
            );
        }
        return $result;
    }
    
    public function action_ajax_item_tree()
    {
        $menuId = $this->request->query('menuId');
        $itemId = $this->request->query('id');
        $menu = Menus::getMenuById($menuId);
        $item = Menus::getItemById($itemId);
        $data = array();
        if(isset($menu))
        {
            $data = $this->getItemsTree($menu, $item);
        }
        $this->response->body(json_encode($data));
    }
    
    public function action_ajax_item_add()
    {
        $validation = Validation::factory($this->request->post());
        $validation
                ->rule('menu', 'not_empty')
                ->rule('menu', 'Menus::isValidMenuId')
                ->rule('parent', 'Menus::isValidItemId')
                ->rule('position', 'digit')
                ->rule('title', 'not_empty')
                ->rule('url_type', 'not_empty')
                ->rule('url', 'not_empty');
        if ($validation->check())
        {
            $item = Menus::createItem($this->request->post());
            if (isset($item))
            {
                $this->response->body(json_encode(array('status' => true, 'message' => 'Пункт меню создан', 'id' => $item->id)));
            }
            else
            {
                $this->response->body(json_encode(array('status' => false, 'message' => 'Не удалось создать меню')));
            }
        }
        else
        {
            $errors = $validation->errors('menus');
            $errorText = implode('<br>', array_values($errors));
            $this->response->body(json_encode(array('status' => false, 'message' => $errorText)));
            return;
        }
    }
    
    public function action_ajax_item_edit()
    {
        $validation = Validation::factory($this->request->post());
        $validation
                ->rule('menu', 'not_empty')
                ->rule('menu', 'Menus::isValidMenuId')
                ->rule('parent', 'Menus::isValidItemId')
                ->rule('position', 'digit')
                ->rule('title', 'not_empty')
                ->rule('url_type', 'not_empty')
                ->rule('url', 'not_empty');
        if ($validation->check())
        {
            $itemId = $this->request->post('id');
            $parent = Menus::getItemById($this->request->post('parent'));
            while(isset($parent))
            {
                if($parent->id == $itemId) {
                    $this->response->body(json_encode(array('status' => false, 'message' => 'Недопустимо назначать редактируемый или дочерний пункт меню в качестве родительского')));
                    return;
                }
                $parent = $parent->getParentItem();
            }
            $item = Menus::getItemById($itemId);
            if(isset($item))
            {
                $item->parentId = $this->request->post('parent');
                $item->position = $this->request->post('position');
                $item->title = $this->request->post('title');
                $item->url_type = $this->request->post('url_type');
                $item->url = $this->request->post('url');
                $item->image = $this->request->post('image');
                $item->tooltip = $this->request->post('tooltip');
                $item->options = $this->request->post('options');
                $item->save();
                $this->response->body(json_encode(array('status' => true, 'message' => 'Изменения сохранены', 'id' => $item->id)));
            }
            else
            {
                $this->response->body(json_encode(array('status' => false, 'message' => 'Пункт не найден')));
            }
        }
        else
        {
            $errors = $validation->errors('menus');
            $errorText = implode('<br>', array_values($errors));
            $this->response->body(json_encode(array('status' => false, 'message' => $errorText)));
            return;
        }
    }
    
    public function action_ajax_item_delete()
    {
        $itemId = $this->request->post('id');
        $item = Menus::getItemById($itemId);
        if(isset($item))
        {
            $item->delete();
            $this->response->body(json_encode(array('status' => true, 'message' => 'Меню удалено')));
        }
        else
        {
            $this->response->body(json_encode(array('status' => false, 'message' => 'Пункт не найден')));
        }
    }
    
}