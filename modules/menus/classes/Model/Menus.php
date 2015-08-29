<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Menus — A menus management system model.
 *
 * @package    Menus
 * @category   Models
 */
class Model_Menus extends Model {
    
    const
        TABLE_MENUS = 'menus_menus',
        TABLE_ITEMS = 'menus_items';
    
    /**
     * Selected database
     * @var Database
     */
    private $db;
    
    public function init($options)
    {
        $this->db = Database::instance($options['db_profile']);
    }
    
    /**
     * Returns array of menus data. This array can be empty.
     * @param string|array $ids Search provided ids only
     * @param string|array $names Search provided names only
     * @return array Array of menus data
     */
    public function getMenus($ids = null, $names = null)
    {
        $query = DB::select()->from(self::TABLE_MENUS);
        if (isset($ids))
        {
            if (is_array($ids))
            {
                $query = $query->where('id', 'in', $ids);
            }
            else
            {
                $query = $query->where('id', '=', $ids);
            }
        }
        if (isset($names))
        {
            if (is_array($names))
            {
                $query = $query->where('name', 'in', $names);
            }
            else
            {
                $query = $query->where('name', '=', $names);
            }
        }
        return $query->order_by('description')->execute($this->db)->as_array('id');
    }
    
    /**
     * Creates menu from array and returns new menu data array
     * @param array $data
     * @return array
     */
    public function createMenu($data)
    {
        $values = array(
            'name' => $data['name'],
            'description' => $data['description'],
            'template' => $data['template'],
        );
        $queryResult = DB::insert(self::TABLE_MENUS, array_keys($values))->values(array_values($values))->execute($this->db);
        $values['id'] = $queryResult[0];
        return $values;
    }
    
    public function updateMenu($id, $data)
    {
        DB::update(self::TABLE_MENUS)->set($data)->where('id', '=', $id)->execute($this->db);
    }
    
    public function deleteMenu($id)
    {
        DB::delete(self::TABLE_MENUS)->where('id', '=', $id)->execute($this->db);
    }
    
    public function getItems($id = null, $menuId = null, $parentItemId = null)
    {
        $query = DB::select()->from(self::TABLE_ITEMS);
        if(isset($id))
        {
            $query = $query->where('id', '=', $id);
        }
        else
        {
            if(isset($parentItemId))
            {
                $query = $query->where('parent', '=', $parentItemId);
            }
            else
            {
                $query = $query->where('parent', 'is', null);
            }
        }
        if(isset($menuId))
        {
            $query = $query->where('menu', '=', $menuId);
        }
        return $query->order_by('position')->execute($this->db)->as_array('id');
    }
    
    /**
     * Creates item from array and returns new item data array
     * @param array $data
     * @return array
     */
    public function createItem($data)
    {
        $values = array(
            'menu' => $data['menu'],
            'parent' => $data['parent'],
            'position' => $data['position'],
            'title' => $data['title'],
            'url_type' => $data['url_type'],
            'url' => $data['url'],
            'image' => $data['image'],
            'tooltip' => $data['tooltip'],
            'options' => $data['options'],
        );
        $queryResult = DB::insert(self::TABLE_ITEMS, array_keys($values))->values(array_values($values))->execute($this->db);
        $values['id'] = $queryResult[0];
        return $values;
    }
    
    public function updateItem($id, $data)
    {
        DB::update(self::TABLE_ITEMS)->set($data)->where('id', '=', $id)->execute($this->db);
    }
    
    private function deleteChildItems($id)
    {
        $items = $this->getItems(null, null, $id);
        foreach($items as $item)
        {
            $this->deleteChildItems($item['id']);
        }
        DB::delete(self::TABLE_ITEMS)->where('parent', '=', $id)->execute($this->db);
    }
    
    public function deleteItem($id)
    {
        $this->deleteChildItems($id);
        DB::delete(self::TABLE_ITEMS)->where('id', '=', $id)->execute($this->db);
    }
    
}