<?php

use kurumi\framework\route\Route;
use kurumi\framework\route\View;

Route::get("/", function () {
  View::render("home", [
    "home" => "anjay",
  ]);
});

Route::get("/about", function () {
  View::render("about");
});
