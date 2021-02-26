<?php

$tasks = $query->SelectAll('todos', 'Task');

require 'views/index.view.php';
