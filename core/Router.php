<?php

namespace ergareFramework;

class Router
{

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function get($uri,$action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri,$action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri,$requestType) {
        $uri = trim($uri,'/');

        if (!array_key_exists($uri,$this->routes[$requestType])) throw new Exception('No route found');

//        dd($this->routes[$requestType][$uri]);
        $action = explode('@',$this->routes[$requestType][$uri]);
//        dd($action);

        $controller = 'App\Controllers\\' . $action[0];
        $method = $action[1];

        // Check if class_exists()
        $controller = new $controller();
        // Same here:
        $controller->$method();

    }
}