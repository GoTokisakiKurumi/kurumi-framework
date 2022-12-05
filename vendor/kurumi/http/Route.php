<?php

namespace Kurumi\Route;

class Route
{

  private static $routes = [];

  private static $url;

  /**
   * Get method
   * ini adalah http  get method
   */
  public static function get(string $paths, callable $callback)
  {
    foreach ([$paths] as $path) {
      if (strlen($path) >= 2) {
        self::$url = rtrim($path, "/");
      }
    }

    self::$routes[self::$url] = $callback;
    self::$routes[$path] = $callback;

    self::run();
  }

  /**
   * Run method
   * ini adalah method yang dimana program di eksekusi
   */
  private static function run()
  {
    $uri = $_SERVER['REQUEST_URI'];
    foreach (self::$routes as $path => $callback) {
      if ($uri !== $path) continue;
      return $callback();
    }
  }
}
