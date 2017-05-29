<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/28/17
 * Time: 6:33 PM
 */

namespace App\Controllers;


use App\Core\Controller;

class AboutController extends Controller
{

  public function __construct()
  { parent::__construct();  }

  public function index()
  {
    $this->view->render('about/index');
  }

  public function company()
  {
    $this->view->render('about/company');
  }

  public function products()
  {
    $this->view->render('about/products');
  }

}