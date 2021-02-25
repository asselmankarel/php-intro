<?php
require './common.php';

try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
} catch (PDOException $e) {
  die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);


// dd($tasks);

require './views/index.view.php';
