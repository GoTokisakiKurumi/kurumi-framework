<?php

namespace App\Core;

class Route
{
  public static $routes;

  public static function get(string $path, callable $callback)
  {
    self::$routes[$path] = $callback;
    self::runRoute();
  }

  public static function runRoute()
  {
    $uri = $_SERVER['REQUEST_URI'];
    foreach (self::$routes as $path => $callback) {
      if ($uri !== $path) continue;
      echo $callback();
    }
  }
}
