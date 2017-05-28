<?php

abstract class Controller
{

  protected $view;

  public function __construct()
  {
    echo 'Main controller<br>';
    $this->view = new View;
  }

  abstract public function index();

}
