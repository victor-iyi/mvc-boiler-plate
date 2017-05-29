<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/28/17
 * Time: 9:11 AM
 */

namespace App\Models;

use App\Core\Model;
use App\Lib\Session;

class UserModel extends Model
{

  public $username;
  public $password;

  public function __construct()
  {
    parent::__construct();
  }

  public function login()
  {
    Session::set("loggedIn", true);
  }

  public function userExists()
  {
    $result = $this->db->query("SELECT id FROM users WHERE username=:username AND PASSWORD=:password",
      ["username"=>$this->username, "password"=>$this->password]);
    return $result->rowCount() > 0;
  }

}