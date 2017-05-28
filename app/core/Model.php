<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/28/17
 * Time: 9:10 AM
 */
namespace App\Core;

use App\Models\Database;

class Model
{

  public $db;

  public function __construct()
  {
    $this->db = new Database;
  }

}