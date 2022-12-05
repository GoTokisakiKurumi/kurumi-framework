<?php

namespace kurumi\framework\route;

class Route
{

  // routes
  private static $routes = [];

  /**
   * method get
   */
  public static function get(string $path, callable $callback)
  {
    self::$routes[$path] = $callback;
    self::run();
  }

  /**
   * fungsi run buat meng execute program dari web.php
   */
  private static function run()
  {
    $uri = $_SERVER['REQUEST_URI'];
    foreach (self::$routes as $path => $callback) {
      if ($uri !== $path) continue;
      $callback();
    }
  }
}
