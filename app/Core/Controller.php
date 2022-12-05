<?php

namespace App\Controller;

class Controller
{
  public function view($view, $data = [])
  {
    require_once '../views/' . $view . '.php';
  }
}
