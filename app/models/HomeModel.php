<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/28/17
 * Time: 10:44 AM
 */

namespace App\Models;

use App\Core\Model;

class HomeModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function login()
  {
    echo 'logging in...';
  }
}