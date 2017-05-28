<?php

namespace App\Controllers;

use App\Core\Controller;

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
