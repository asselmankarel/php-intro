<?php

class Task
{
  public $description;
  protected $completed = false;

  function __construct()
  {
    //$this->description = $description;
  }

  function complete()
  {
    $this->completed = true;
  }

  function isCompleted()
  {
    return $this->completed;
  }
}
