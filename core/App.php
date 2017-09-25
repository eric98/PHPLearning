<?php

class App
{
    protected $registry = [];

    public static function bind($name, $value)
    {
        static::$registry[$name] = $value;
    }

    public static function resolve($name)
    {
        if (!array_key_exists($name,$registry)) throw new Exception('No route found');

        return static::$registry[$name] = $value;
    }
}