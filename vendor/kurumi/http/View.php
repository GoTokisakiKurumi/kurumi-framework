<?php

namespace Kurumi\Route;

require_once "vendor/kurumi/resource/resource.php";

class View
{
  /**
   * method untuk render html
   */
  public static function render(string $filename, $data = [])
  {
    if (!file_exists("./public/views/" . $filename . ".php")) {
      self::errorFileHandling($filename);
    } else {
      require_once "./public/views/" . $filename . ".php";
    }
  }

  /**
   *  method untuk menampilkan pesan error 
   */
  public static function errorFileHandling($filename)
  {
    $message = "trying to access a file that doesn't exist.";
    require_once "./vendor/kurumi/handling/message/index.php";
  }
}
