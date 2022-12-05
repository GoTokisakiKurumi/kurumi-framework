<?php

use App\Core\Route;

Route::get('/', function () {
  return '<h1>page home</h1>';
});

Route::get('/about', function () {
  return '<h1>page about</h1>';
});

