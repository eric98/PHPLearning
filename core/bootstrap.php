<?php
$config = require 'config/config.php';

require 'vendor/autoload.php';

$pdo = Connection::connect($config);

App::bind('database',new QueryBuilder($pdo));