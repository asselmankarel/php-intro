<?php
require 'helpers/common.php';
require 'models/Task.php';
require 'bootstrap.php';

$tasks = $query->SelectAll('todos', 'Task');

// dd($tasks);

require './views/index.view.php';
