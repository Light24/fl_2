<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Contests_Like— A content management system module like model.
 *
 * @package    Contests
 * @category   Models
 */
class Contests_Like {
    
    private static $propsMapping = array(
        'id' => 'id',
        'work_id' => 'work_id',
        'user_id' => 'user_id',
        'datePost' => 'datePost',
        'ip' => 'ip',
        'useragent' => 'useragent',
    );
    
    private $data = array();
    
    public static function fromArray($data)
    {
        $like = new Contests_Like();
        $like->data = $data;
        return $like;
    }
    
    public function __get($name)
    {
        switch ($name) {
            default:
                if (isset(self::$propsMapping[$name]))
                {
                    return Arr::get($this->data, self::$propsMapping[$name]);
                }
                else
                {
                    return null;
                }
        }
    }
    
    public function __set($name, $value)
    {
        switch ($name) {
            default:
                if (isset(self::$propsMapping[$name]))
                {
                    $this->data[self::$propsMapping[$name]] = $value;
                }
        }
    }
    
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
    
    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    public function save()
    {
        Contests::updateLike($this->data['id'], $this->data);
    }
}