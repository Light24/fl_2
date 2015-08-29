<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Menus_Menu — A menus menu object.
 *
 * @package    Menus
 * @category   Objects
 */
class Menus_Menu {
    
    public $id;
    public $name;
    public $description;
    public $template;
    
    /**
     * Creates Menu object from array
     * @param array $data
     * @return Menus_Menu
     */
    public static function fromArray($data)
    {
        $menu = new Menus_Menu();
        $menu->id = $data['id'];
        $menu->name = $data['name'];
        $menu->description = $data['description'];
        $menu->template = $data['template'];
        return $menu;
    }
    
    public function save()
    {
        Menus::$model->updateMenu($this->id, array(
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'template' => $this->template,
        ));
    }
    
    public function delete()
    {
        Menus::$model->deleteMenu($this->id);
        Menus::removeMenuFromCache($this->id);
    }
    
    /**
     * Returns root items of the menu
     * @return Menus_Item[]
     */
    public function getItems($parentItemId = null)
    {
        $itemsData = Menus::$model->getItems(null, $this->id, $parentItemId);
        return Menus::convertItems($itemsData);
    }
    
}