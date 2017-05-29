<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/28/17
 * Time: 9:08 AM
 */

namespace App\Core;

use App\Lib\Session;

/**
 * @property string title
 * @property string status
 * @property array js
 */
class View
{

  public function __construct()
  {
    $this->loggedIn = Session::get("loggedIn");
  }

  public function render($name)
  {
    $viewFile = 'app/views/' . $name . '.php';
    if ( file_exists($viewFile) )
      require_once 'app/views/layout.php';
  }

}