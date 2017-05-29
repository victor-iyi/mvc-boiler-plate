<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\UserModel;

class HomeController extends Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view->render('home/index');
  }

  public function login()
  {
    if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
      $userModel = new UserModel;
      $userModel->username = trim($_POST['username']);
      $userModel->password = trim($_POST['password']);

     if ( $userModel->login() )
       header("Location: " . PROJECT_PATH . "dashboard");
     else
       $this->view->status = "Incorrect credentials";
    }
    $this->view->render('home/login');
  }

  public function register()
  {
    $this->view->render('home/register');
  }

  public function logout()
  {

  }
}
