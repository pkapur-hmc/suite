<?php
  session_start();
  include_once("model/model.php");

/*
  if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
  }
*/

  class Controller {
    public $model;

    public function __construct()  {
      $this->model = new Model();
    }

    public function invoke() {

      $result = $this->model->getlogin();

      if($result == 'login') {
        include_once( 'view/Afterlogin.php');
        // we don't have a Afterlogin.php file
        // should this be our home file instead?
      }
      else {
        include_once( 'view/login.php');
      }
    }
  }
?>
