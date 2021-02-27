<?php

namespace App\Controllers;

use App\core\App;

class PagesController
{

  public function home()
  {
    $users = App::get('database')->selectAllSimple('users');
    return view('index', ['users' => $users]);
  }

  public function about()
  {
    return view('about', []);
  }

  public function contact()
  {
    return view('contact', []);
  }
}
