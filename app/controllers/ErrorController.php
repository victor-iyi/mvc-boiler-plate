<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/28/17
 * Time: 9:20 AM
 */
class ErrorController extends Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view->render('error/index');
  }
}