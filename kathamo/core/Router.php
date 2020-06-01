<?php

/**
 * Router class
 */
class Router
{

    /**
     * @var array
     */
    public $routes = [
        'GET'  => [],
        'POST' => []
    ];

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
     * Set get request uri
     * 
     * @return void
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * Set post request uri
     * 
     * @return void
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * Get associative controller based on uri
     * 
     * @param $uri | string
     * @param $requestType | string
     * 
     * @return string | Exception
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route defined for this URI.');
    }
}
