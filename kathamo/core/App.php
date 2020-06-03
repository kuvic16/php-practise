<?php

/**
 * App class to initialize config, database
 */
class App
{
    protected static $resitry = [];

    public static function bind($key, $value)
    {
        static::$resitry[$key] = $value;
    }

    public static function get($key)
    {
        if (!array_key_exists($key, static::$resitry)) {
            throw new Exception("No {$key} is bound in the container.");
        }
        return static::$resitry[$key];
    }
}
