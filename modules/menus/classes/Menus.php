<?php defined('SYSPATH') or die('No direct script access.');
echo 'asdsadsa';exit(0);
/**
 * Menus — A menus management system main class.
 *
 * @package    Menus
 * @category   Helpers
 */
class Menus {
    
    public static $config = null;
    
    /**
     * Selected model
     * @var Model_Menus
     */
    public static $model;
    
    /**
     * Array of Menus_Menu objects
     * @var array
     */
    private static $menus = array();
    
    /**
     * Array of Menus_Item
     * @var array
     */
    private static $items = array();
    
    
    public static function init()
    {
        if (!isset(self::$config))
        {
            self::$config = Kohana::$config->load('menus')->as_array();
            self::$model = Model::factory(self::$config['model']['name']);
            self::$model->init(self::$config['model']);
        }
    }
    
    public static function getView($template, $level, $name)
    {
        return View::factory("menus/$template/level_$level/$name");
    }
    
    private static function convertMenu($menuData)
    {
        $menuId = $menuData['id'];
        if(isset(self::$menus[$menuId]))
        {
            return self::$menus[$menuId];
        }
        else
        {
            return self::$menus[$menuId] = Menus_Menu::fromArray($menuData);
        }
    }

    private static function convertMenus($data)
    {
        $result = array();
        foreach($data as $menuId => $menuData)
        {
            $result[$menuId] = self::convertMenu($menuData);
        }
        return $result;
    }
    
    public static function convertItem($itemData)
    {
        $itemId = $itemData['id'];
        if(isset(self::$items[$itemId]))
        {
            return self::$items[$itemId];
        }
        else
        {
            return self::$items[$itemId] = Menus_Item::fromArray($itemData);
        }
    }
    
    public static function convertItems($data)
    {
        $result = array();
        foreach($data as $itemId => $itemData)
        {
            $result[$itemId] = self::convertItem($itemData);
        }
        return $result;
    }

    /**
     * Returns an array with all existing menus
     * @return Menus_Menu[]
     */
    public static function getMenus()
    {
        $menus = self::$model->getMenus();
        return self::convertMenus($menus);
    }
    
    /**
     * Return menu object with specified id or null if menu not found
     * @param int $menuId
     * @return Menus_Menu|null
     */
    public static function getMenuById($menuId)
    {
        if(isset(self::$menus[$menuId]))
        {
            return self::$menus[$menuId];
        }
        else
        {
            $menusData = self::$model->getMenus($menuId);
            if(count($menusData) != 0)
            {
                return self::convertMenu($menusData[$menuId]);
            }
            else
            {
                return null;
            }
        }
    }

    /**
     * Return menu object with specified name or null if menu not found
     * @param string $menuName
     * @return Menus_Menu|null
     */
    public static function getMenuByName($menuName)
    {
        $menusData = self::$model->getMenus(null, $menuName);
        foreach($menusData as $menuId => $menuData)
        {
            return self::convertMenu($menuData); 
        }
        return null;
    }
    
    /**
     * Return new menu object with specified settings
     * @param array $data
     * @return Menus_Menu|null
     */
    public static function createMenu($data)
    {
        $menuData = self::$model->createMenu($data);
        if(isset($menuData))
        {
            return self::convertMenu($menuData);
        }
        else
        {
            return null;
        }
    }
    
    public static function removeMenuFromCache($id)
    {
        if(isset(self::$menus[$id]))
        {
            unset(self::$menus[$id]);
        }
    }
    
    /**
     * Returns item object by it's id, or null if item not found
     * @param int $itemId
     * @return Menus_Item|null
     */
    public static function getItemById($itemId)
    {
        $itemId = (int)$itemId;
        if(isset(self::$items[$itemId]))
        {
            return self::$items[$itemId];
        }
        else
        {
            $itemsData = self::$model->getItems($itemId);
            if(count($itemsData) != 0)
            {
                return self::convertItem($itemsData[$itemId]);
            }
            else
            {
                return null;
            }
        }
    }
    
    /**
     * Return new menu item object with specified settings
     * @param array $data
     * @return Menus_Item|null
     */
    public static function createItem($data)
    {
        $values = $data;
        if(empty($values['parent']))
        {
            $values['parent'] = null;
        }
        $itemData = self::$model->createItem($values);
        if(isset($itemData))
        {
            return self::convertItem($itemData);
        }
        else
        {
            return null;
        }
    }
    
    public static function removeItemFromCache($id)
    {
        if(isset(self::$items[$id]))
        {
            unset(self::$items[$id]);
        }
    }
    
    public static function isValidMenuId($menuId)
    {
        $menu = self::getMenuById($menuId);
        return isset($menu);
    }
    
    public static function isValidItemId($itemId)
    {
        $item = self::getItemById($itemId);
        return isset($item);
    }

}

/*
 * Static variables initialization
 */
Menus::init();
