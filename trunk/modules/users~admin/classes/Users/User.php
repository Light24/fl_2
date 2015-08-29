<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Users_User — A content management system module user model.
 *
 * @package    Users
 * @category   Models
 */
class Users_User {
    
    private static $propsMapping = array(
        'id' => 'id',
        'fio' => 'fio',
        
        'city' => 'city',
        'photo' => 'photo',
        'email' => 'email',
        
        'uid_vk' => 'uid_vk',
        'uid_fb' => 'uid_fb',
        'uid_tw' => 'uid_tw',
        'provider_vk' => 'provider_vk',
        'provider_fb' => 'provider_fb',
        'provider_tw' => 'provider_tw',
        'sex' => 'sex',
        'date_birth' => 'date_birth',
        'password' => 'password',
        
        'confirmed' => 'confirmed',
        'points' => 'points',
        'last_activity' => 'last_activity',
        'login'=>'login'
    );
    
    private $data = array();
    
    public static function fromArray($data)
    {
        $user = new Users_User();
        $user->data = $data;
        return $user;
    }
    
    public function __get($name)
    {
        switch ($name) {
            case 'confirmed':
          
                $val = Arr::get($this->data, self::$propsMapping[$name]);
                if($val == '1') return 'Да';
                else return 'Нет'; 
                break;
            default:
                if (isset(self::$propsMapping[$name]))
                {
                    return Arr::get($this->data, self::$propsMapping[$name]);
                }
                else
                {
                    return null;
                }
                break;
        }
    }
    
    public function __set($name, $value)
    {
        switch ($name) {
            case 'password':
                $this->data[self::$propsMapping[$name]] = md5($value);
                break;
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
        Users::updateUser($this->data['id'], $this->data);
    }
}