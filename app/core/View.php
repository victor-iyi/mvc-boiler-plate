<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/28/17
 * Time: 9:08 AM
 */

namespace App\Core;

class View
{
  public $js = [];

  public function __construct()
  {
    $this->title = "MVC";
  }

  public function render($name)
  {
    $viewFile = 'app/views/' . $name . '.php';
    if ( file_exists($viewFile) )
      require_once 'app/views/layout.php';
  }

}