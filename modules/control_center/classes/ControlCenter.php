<?php defined('SYSPATH') or die('No direct script access.');
/**
 * ControlCenter — A kohana administration system module.
 *
 * @package    ControlCenter
 * @category   Models
 */
class ControlCenter {
    
    const TABLE_SETTINGS = 'control_settings';
    
    public static $modules = array();
    public static $config = NULL;
    
    public static $dbProfile;
    
    public static function init()
    {
        if (!isset(self::$config))
        {
            $kohana_config = Kohana::$config->load('control_center')->as_array();
            self::$dbProfile = Arr::get(self::$config, 'DB_PROFILE', 'default');
            $db_config = DB::select()->from(self::TABLE_SETTINGS)->execute(self::$dbProfile)->as_array('id', 'value');
            self::$config = array_replace($kohana_config, $db_config);
            foreach(self::$config['MODULES'] as $key => $data)
            {
                $module = self::moduleFromArray($key, $data);
                self::$modules[$key] = $module;
            }
        }
    }
    
    private static function moduleFromArray($name, $data)
    {
        $module = new stdClass();
        $module->name = $name;
        $module->title = Arr::get($data, 'title', 'untitled');
        $module->author = Arr::get($data, 'author', 'anonym');
        $module->description = Arr::get($data, 'description', '');
        $module->version = Arr::get($data, 'version', 'unknown');
        $module->url = Arr::get($data, 'url');
        $module->mode = Arr::get($data, 'mode');
        return $module;
    }
    
    public static function getModules()
    {
        return self::$modules;
    }
    
    public static function getModule($name)
    {
        return Arr::get(self::$modules, $name);
    }

    public static function getTopModules()
    {
        $result = array();
        foreach(self::$config['TOP_MODULES'] as $key => $value)
        {
            if (isset(self::$modules[$value]))
            {
                $result[] = self::$modules[$value];
            }
        }
        return $result;
    }
    
}

/*
 * Static variables initialization
 */
ControlCenter::init();
