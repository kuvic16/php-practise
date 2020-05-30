<?php

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
        return trim(str_replace('kathamo', '', $_SERVER['REQUEST_URI']), '/');
    }
}
