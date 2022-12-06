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
    if (!file_exists("./public/views/" . $filename . ".php")) {
      die(self::errorHandling());
    } else {
      require_once "./public/views/" . $filename . ".php";
    }
  }

  public static function errorHandling()
  {
    echo 'file tidak di temukan, silahkan coba lgi :v';
  }
}
