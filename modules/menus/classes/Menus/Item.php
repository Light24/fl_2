<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Menus_Item — A menus menu item object.
 *
 * @package    Menus
 * @category   Objects
 */
class Menus_Item {
    
    public $id;
    public $menuId;
    public $parentId;
    public $position;
    public $title;
    public $url_type;
    public $url;
    public $image;
    public $tooltip;
    public $options;
    
    public static function fromArray($data)
    {
        $item = new Menus_Item();
        $item->id = $data['id'];
        $item->menuId = $data['menu'];
        $item->parentId = $data['parent'];
        $item->position = $data['position'];
        $item->title = $data['title'];
        $item->url_type = $data['url_type'];
        $item->url = $data['url'];
        $item->image = $data['image'];
        $item->tooltip = $data['tooltip'];
        $item->options = $data['options'];
        return $item;
    }
    
    public function save()
    {
        if(empty($this->parentId))
        {
            $this->parentId = null;
        }
        Menus::$model->updateItem($this->id, array(
            'id' => $this->id,
            'menu' => $this->menuId,
            'parent' => $this->parentId,
            'position' => $this->position,
            'title' => $this->title,
            'url_type' => $this->url_type,
            'url' => $this->url,
            'image' => $this->image,
            'tooltip' => $this->tooltip,
            'options' => $this->options,
        ));
    }
    
    public function delete()
    {
        Menus::$model->deleteItem($this->id);
        Menus::removeItemFromCache($this->id);
    }
    
    public function getItems()
    {
        $itemsData = Menus::$model->getItems(null, $this->menuId, $this->id);
        return Menus::convertItems($itemsData);
    }
    
    public function getParentItem()
    {
        return Menus::getItemById($this->parentId);
    }
    
    public function getFinalUrl()
    {
        switch($this->url_type)
        {
            case 'url':
                return $this->url;
            case 'pages_page':
                $page = Pages::getPageById($this->url);
                if(isset($page))
                {
                    return $page->getFullUrl();
                }
                else
                {
                    return null;
                }
        }
    }
    
}