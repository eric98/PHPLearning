<?php

use ergareFramework\Request;
use ergareFramework\Router;

require 'core/bootstrap.php';

Router::load('app/routes.php')->direct(Request::uri(),Request::type());
