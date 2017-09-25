<?php

require 'core/bootstrap.php';



//Chaining Methods
$uri = $_SERVER["REQUEST_URI"];

//dd(trim('/about/','about'));
//
//dd($_SERVER);

Router::load('app/routes.php')->direct(trim($uri,'/'));

//$router = new Router();
//$router->load();