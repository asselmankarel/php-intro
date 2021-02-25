<?php
//require 'helpers/common.php';
require 'models/Task.php';
require 'database/Connection.php';


$pdo = Connection::Make();

$statement = $pdo->prepare('select * from todos');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


// dd($tasks);

require './views/index.view.php';
