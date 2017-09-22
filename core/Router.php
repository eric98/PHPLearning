<?php

class Router
{

    protected $routes;

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public static function load($file)
    {
        $routes = new static;
        $routes->define(require $file);
        return $routes;
    }

    public function direct($uri) {

//        dd($this->routes);
//        dd($this->routes[$uri]);
//        array_key_exists($this->routes,$uri);
        require $this->routes[$uri];
    }
}