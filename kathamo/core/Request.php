<?php

namespace Kathamo\Core;

/**
 * Request class
 */
class Request
{
    /**
     * Get uri
     * 
     * @return string 
     */
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    /**
     * Get requested method
     * 
     * @return string
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
