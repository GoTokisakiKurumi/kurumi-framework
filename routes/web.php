<?php

use kurumi\framework\route\View;
use kurumi\framework\route\Route;

Route::get("/", function () {
  View::render("home");
});
