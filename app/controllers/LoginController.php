<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/29/17
 * Time: 8:23 AM
 */

namespace App\Controllers;


use App\Core\Controller;
use App\Models\UserModel;

class LoginController extends Controller
{

  public function __construct()
  { parent::__construct();  }

  public function index()
  { $this->user();  }

  public function user()
  {
    if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
      $userModel = new UserModel();

    }
    $this->view->render('login/user');
  }

  public function admin()
  {
    $this->view->render('login/admin');
  }
}