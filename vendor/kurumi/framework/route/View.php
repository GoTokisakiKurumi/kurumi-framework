<?php

namespace kurumi\framework\route;

class View
{

  /**
   * method untuk render html
   */
  public static function render(string $filename, $data = [])
  {
    require_once dirname(__FILE__) . "..\\..\\..\\..\\..\\public\\views\\" . $filename . ".php";
  }
}
