<?php

/**
 *  section digunakan untuk include components di folder
 *  public/views/
 */
function section(string $filename)
{
  require "./public/components/" . $filename . ".php";
}

/**
 *  asset berfungsi untuk me
 */
function asset(string $filename)
{
  echo "./public/" . $filename;
}
