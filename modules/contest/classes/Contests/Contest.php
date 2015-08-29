<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Contests_Contest — A content management system module contest model.
 *
 * @package    Contests
 * @category   Models
 */
class Contests_Contest {

    private static $propsMapping = array(
        'id' => 'id',
        'category' => 'category',
        
    );
    private $data = array();

    public static function fromArray($data) {
        $contest = new Contests_Contest();
        $contest->data = $data;
        return $contest;
    }

    public function __get($name) {
        switch ($name) {


            default:
                if (isset(self::$propsMapping[$name])) {
                    return Arr::get($this->data, self::$propsMapping[$name]);
                } else {
                    return null;
                }
        }
    }

    public function __set($name, $value) {
        switch ($name) {
           
            default:
                if (isset(self::$propsMapping[$name])) {
                    $this->data[self::$propsMapping[$name]] = $value;
                }
        }
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        unset($this->data[$name]);
    }

    public function save() {
        Contests::updateContest($this->data['id'], $this->data);
    }

}