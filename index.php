<?php

require 'core/bootstrap.php';



//Chaining Methods
$uri = "tasks";

//dd(trim('/about/','about'));
//
//dd($_SERVER);

Router::load('app/routes.php')->direct($uri);

//$router = new Router();
//$router->load();