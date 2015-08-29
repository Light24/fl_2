<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Contests_Prize — A content management system module prize model.
 *
 * @package    Contests
 * @category   Models
 */
class Contests_Work {
    
    private static $propsMapping = array(
        'id' => 'id',
        'user_id' => 'user_id',
        'contest_id' => 'contest_id',
        'text_q' => 'text_q',
        'date_post'=>'date_post',
        'ip'=>'ip',
        'useragent'=>'useragent',
        
    );
    
    private $data = array();
    
    public static function fromArray($data)
    {
        $contest = new Contests_Work();
        $contest->data = $data;
        return $contest;
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
        Contests::updateWork($this->data['id'], $this->data);
    }
}