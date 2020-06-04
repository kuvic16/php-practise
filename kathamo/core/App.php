<?php

namespace Kathamo\Core;

/**
 * App class to initialize config, database
 */
class App
{
    /**
     * @var array
     */
    protected static $resitry = [];

    /**
     * set object into array using key
     * 
     * @param $key | string
     * @param $value | obj
     * 
     * @return void
     */
    public static function bind($key, $value)
    {
        static::$resitry[$key] = $value;
    }

    /**
     * Get the object from the array
     * 
     * @param $key | string
     * 
     * @return obj
     */
    public static function get($key)
    {
        if (!array_key_exists($key, static::$resitry)) {
            throw new Exception("No {$key} is bound in the container.");
        }
        return static::$resitry[$key];
    }
}
