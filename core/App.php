<?php

namespace App\core;

class App
{
  static $registry = [];

  public static function bind($key, $value)
  {
    static::$registry[$key] = $value;
  }

  public static function get($key)
  {
    if (!array_key_exists($key, static::$registry)) {
      throw new \Exception("No {$key} in App::registry");
    }
    return static::$registry[$key];
  }
}
