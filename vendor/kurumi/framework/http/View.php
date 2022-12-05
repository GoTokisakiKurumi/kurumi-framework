<?php

namespace kurumi\framework\route;

require "vendor/kurumi/framework/resource/resource.php";

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
