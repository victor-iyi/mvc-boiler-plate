<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/29/17
 * Time: 8:31 AM
 */

namespace App\Controllers;


use App\Core\Controller;

class LogoutController extends Controller
{

  public function __construct()
  { parent::__construct();  }

  public function index()
  { $this->user();  }

  public function user()
  {

  }

  public function admin()
  {

  }
}