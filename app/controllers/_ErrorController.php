<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/28/17
 * Time: 9:20 AM
 */
namespace App\Controllers;


use App\Core\Controller;

class _ErrorController extends Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->view->title = "Error";
  }

  public function index($type=null, $status="")
  {
    $this->view->status = $status;
    switch ( $type ) {
      case 404:
        $this->view->render('_error/404');
        break;
      case 500:
        $this->view->render('_error/500');
        break;
      default:
        $this->view->render('_error/index');
    }
  }

}