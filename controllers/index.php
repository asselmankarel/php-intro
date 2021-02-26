<?php

$users = App::get('database')->selectAllSimple('users');

require 'views/index.view.php';
