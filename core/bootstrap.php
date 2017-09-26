<?php

use ergareFramework\App;
use ergareFramework\Database\Connection;
use ergareFramework\Database\QueryBuilder;

$config = require 'config/config.php';

require 'core/lib/functions.php';
require 'vendor/autoload.php';

$pdo = Connection::connect($config);

App::bind('database',new QueryBuilder($pdo));