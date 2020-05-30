<?php

/**
 * Router class
 */
class Router
{

    /**
     * @var array
     */
    protected $routes = [];

    /**
     * load router file
     * 
     * @param $file | string
     * 
     * @return Router
     */
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    /**
     * Define routes
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * Get associative controller based on uri
     * 
     * @param $uri | string
     * 
     * @return string | Exception
     */
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined for this URI.');
    }
}
