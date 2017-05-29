<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/29/17
 * Time: 8:23 AM
 */

namespace App\Controllers;


use App\Core\Controller;
use App\Models\LoginModel;

class LoginController extends Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->view->title = "Login";
  }

  public function index()
  { $this->user();  }

  public function user()
  {
    if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
      // check empty filed
      if ( isset($_POST['username']) && !empty($_POST['username']) ) {
        if ( isset($_POST['password']) && !empty($_POST['password']) ) {
          $loginModel = new LoginModel;
          if ( $loginModel->userLogin($_POST) )
            header("Location: " . PROJECT_PATH . "dashboard");
          else
            $this->view->status = "Could not log this user in.";
        } else $this->view->status = "Please fill in your password";
      } else $this->view->status = "Please fill in your username";
    }
    $this->view->render('login/user');
  }

  public function admin()
  {
    $this->view->title = "Admin Login";
    $this->view->render('login/admin');
  }
}