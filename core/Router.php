<?php

namespace App\core;


class Router
{

  protected $routes = [
    'GET' => [],
    'POST' => []
  ];

  public static function load($file)
  {
    $router = new self;
    require $file;
    return $router;
  }

  public function get($uri, $route)
  {
    $this->routes['GET'][$uri] = $route;
  }

  public function post($uri, $route)
  {
    $this->routes['POST'][$uri] = $route;
  }


  public function direct($requestType, $uri)
  {
    if (array_key_exists($uri, $this->routes[$requestType])) {

      return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
    }
    throw new \Exception('no route defined for this uri');
  }

  protected function callAction($controller, $action)
  {
    $controller = "App\\Controllers\\{$controller}";
    $controller = new $controller;
    if (!method_exists($controller, $action)) {
      throw new \Exception("{$controller} does not have the following action: {$action}");
    }
    return $controller->$action();
  }
}
