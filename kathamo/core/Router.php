<?php

namespace Kathamo\Core;

use Exception;

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
     * @param string $file
     * 
     * @return Router
     */
    public static function load($file)
    {
        $router = new static;
        require $file;
        //return $router;
        var_dump("test");
        die;
    }

    /**
     * Define routes
     * 
     * @deprecated
     * 
     * @param array $routes
     * 
     * @return void
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * Set get request uri
     * 
     * @param string $uri
     * @param string $controller
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
     * @param string $uri
     * @param string $controller
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
     * @param string $uri
     * @param string $requestType
     * 
     * @return string | Exception
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
        }

        throw new Exception('No route defined for this URI.');
    }

    /**
     * Call action method
     * 
     * @param string $controller
     * @param string $action
     * 
     * @return method
     */
    protected function callAction($controller, $action)
    {
        $controller = "Kathamo\\Controllers\\{$controller}";
        $controller = new $controller;
        if (!method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not responde to the {$action} action."
            );
        }
        return $controller->$action();
    }
}
