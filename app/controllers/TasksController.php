<?php

namespace App\Controllers;

use ergareFramework\App;

class TasksController
{
    /**
     * Resource Controllers
     *
     * CRUD
     * C-> Create (create|store)
     * R-> Retrieve (index)
     * U-> Update (edit|update)
     * D-> Delete (destroy)
     */
    public function index()
    {
        //show tasks
        $database = App::resolve('database');

        $tasks = $database->fetchAll('tasks');

        return view('tasks');
    }

    public function create()
    {
        //show create form
        return view('task.add');
    }

    public function store()
    {
        //store task on database
        $database = App::resolve('database');

        $database->insert('tasks', [
            "name" => $_POST['name']
        ]);
        return view('successfull');
    }
}