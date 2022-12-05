<?php

use App\Core\Route;

Route::get('/', function () {
  return ('
    <!DOCTYPE html>
      <html lang="en">
        <head>
          <title>home</title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="css/style.css" rel="stylesheet">
        </head>
        <body>
          <h1>ini adalah halaman home</h1>
        </body>
      </html>
  ');
});

Route::get('/about', function () {
  return ('
    <!DOCTYPE html>
      <html lang="en">
        <head>
          <title>about</title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="css/style.css" rel="stylesheet">
        </head>
        <body>
          <h1>ini adalah halaman about</h1>
        </body>
      </html>
  ');
});
