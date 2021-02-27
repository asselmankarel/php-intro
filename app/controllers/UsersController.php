<?php

namespace App\Controllers;

use App\core\App;

class UsersController
{
  public function index()
  {
    $users = App::get('database')->selectAllSimple('users');
    return view('index', ['users' => $users]);
  }

  public function store()
  {
    App::get('database')->insert('users', ['name' => $_POST['name']]);
    header('Location: /');
  }
}
