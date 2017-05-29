<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/29/17
 * Time: 10:54 AM
 */

namespace App\Models;


use App\Core\Model;
use App\Lib\Session;

class AdminModel extends Model
{

  public function __construct()
  { parent::__construct();  }

  public function logout($redirect="")
  {
    Session::destroy();
    header("Location: ". PROJECT_PATH . $redirect);
  }

}