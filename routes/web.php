<?php

use Kurumi\Route\View;
use Kurumi\Route\Route;

Route::get("/", function () {
  View::render("home");
});
