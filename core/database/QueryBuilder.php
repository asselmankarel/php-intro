<?php

class QueryBuilder
{
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table, $intoClass)
  {
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
  }

  public function selectAllSimple($table)
  {
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($table, $parameters)
  {
    $sql = sprintf("insert into %s (%s) values (%s)", $table, implode(', ', array_keys($parameters)), ':' . implode(', :', array_keys($parameters)));
    $statement = $this->pdo->prepare($sql);
    try {
      $statement->execute($parameters);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}
