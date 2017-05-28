<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{

  public function __construct()
  {

    parent::__construct();
  }

  public function index($args=[])
  {
    require_once APP_ROOT . 'models/HomeModel.php';
    $this->view->render('home/index', ['args' => $args, 'title'=>'HomeController']);
  }
}
