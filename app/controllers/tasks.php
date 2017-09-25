<?php

//BOOTSTRAP
$pdo = Connection::connect($config);
App::bind('database', new QueryBuilder($config));

//FORA BOOTSTRAP
$query = App::resolve('database');
$tasks = $query->fetchAll('tasks');

require 'app/views/tasks.view.php';