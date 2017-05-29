<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/29/17
 * Time: 8:25 AM
 */

namespace App\Controllers;


use App\Core\Controller;

class RegisterController extends Controller
{

  public function __construct()
  { parent::__construct();  }

  public function index()
  { $this->user();  }

  public function user()
  {
    $this->view->render('register/user');
  }

  public function admin()
  {
    $this->view->render('register/admin');
  }

}