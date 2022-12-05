<?php

namespace Kurumi\Route;

require "vendor/kurumi/resource/resource.php";

class View
{
  /**
   * method untuk render html
   */
  public static function render(string $filename, $data = [])
  {
    require_once "./public/views/" . $filename . ".php";
  }
}
