<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Users - A content management system module main model.
 *
 * @package    Users
 * @category   Models
 */
class Users {

    const INFO = 'info',
            SUCCESS = 'success',
            WARNING = 'warning',
            ERROR = 'error',
            TABLE_USERS = 'users';

    private static $users = array();
    public static $config = NULL;
    public static $dbProfile;

    public static function init() {
        if (!isset(self::$config)) {
            $kohana_config = Kohana::$config->load('users')->as_array();
            self::$dbProfile = Arr::get(self::$config, 'DB_PROFILE', 'default');
        }
    }

    public static function getUsersList() {
        
        $result = array();

       $queryResult = DB::query(Database::SELECT, 'SELECT * FROM `' . self::TABLE_USERS )->execute(self::$dbProfile)->as_array();
        
        foreach ($queryResult as $row) {
            $result[$row['id']] = $row;
        }

        return $result;
    }

    public static function getUsersCount() {
        $result = DB::select(DB::expr('COUNT("id") as total'))
                ->from(self::TABLE_USERS)
                ->execute(self::$dbProfile)
                ->as_array(null, 'total');

        return $result[0];
    }

    public static function deleteUser($id) {
        //TODO удалять все файлы связанные с пользователем
        DB::delete(self::TABLE_USERS)->where('id', '=', $id)->execute(self::$dbProfile);
    }

    public static function createUser(
    $fio, $date_birth, $city, $sex, $email, $password,$confirmed,$points,$login
    ) {
        $last_activity=date("Y-m-d H:i:s");
        $result = DB::insert(self::TABLE_USERS, array('fio', 'date_birth', 'city', 
            'sex', 'email','password','confirmed','points','last_activity','login'))
                ->values(array($fio, $date_birth, $city, $sex, $email, md5($password), $confirmed, $points, $last_activity,$login))
                ->execute(self::$dbProfile);
        return self::getUserById($result[0]);
    }

    public static function getUserById($id) {
        $id = (int) $id;
        if (isset(self::$users[$id])) {
            return self::$users[$id];
        } else {
            $queryResult = DB::select()->from(self::TABLE_USERS)->where('id', '=', $id);
            $queryResult = $queryResult->execute(self::$dbProfile);
            if ($queryResult->count() != 0) {
                $user = Users_User::fromArray($queryResult->current());
                self::$users[$id] = $user;
                return $user;
            } else {
                return null;
            }
        }
    }

    public static function updateUser($id, $data) {
        DB::update(self::TABLE_USERS)->set($data)->where('id', '=', $id)->execute(self::$dbProfile);
    }

    public static function checkEmailDoubles($email, $id) {
        $queryResult = DB::select(DB::expr('COUNT(*) as `count`'))->from(self::TABLE_USERS)->where('id', '<>', $id)->and_where('email', '=', $email);
        $queryResult = $queryResult->execute(self::$dbProfile);
        $res = $queryResult->current();
        if ($res['count'] > 0)
            return false;
        else
            return true;
    }
    
    public static function checkLoginDoubles($login, $id) {
        $queryResult = DB::select(DB::expr('COUNT(*) as `count`'))->from(self::TABLE_USERS)->where('id', '<>', $id)->and_where('login', '=', $login);
        $queryResult = $queryResult->execute(self::$dbProfile);
        $res = $queryResult->current();
        if ($res['count'] > 0)
            return false;
        else
            return true;
    }

    public static function checkPhoneDoubles($phone, $id) {
        if (empty($phone))
            return true;

        $queryResult = DB::select(DB::expr('COUNT(*) as `count`'))->from(self::TABLE_USERS)->where('id', '<>', $id)->and_where('phone', '=', $phone);
        $queryResult = $queryResult->execute(self::$dbProfile);
        $res = $queryResult->current();
        if ($res['count'] > 0)
            return false;
        else
            return true;
    }

}

/*
 * Static variables initialization
 */
Users::init();
