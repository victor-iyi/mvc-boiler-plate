<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{

  public function __construct()
  { parent::__construct();  }

  public function index()
  {
    $this->view->render('home/index');
  }

}
