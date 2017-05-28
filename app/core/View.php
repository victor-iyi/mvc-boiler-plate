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

  public function __construct()
  {
  }

  public function render($name, $data=[])
  {
    $viewFile = 'app/views/' . $name . '.php';
    extract($data);
    if ( file_exists($viewFile) )
      require_once 'app/views/layout.php';
  }

}