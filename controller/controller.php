<?php
  session_start();
  include_once("model/model.php");
  include("view/view.php")

/*
  if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
  }
*/

  class Controller {
    public $model;

    public function __construct()  {
      $this->model = new Model();
      $this->view = new View($this->model);
    }

    public function invoke() {
      
      $this->view->renderLoginPage();

      if (isset($_POST['login'])){
        $result = $this->model->getlogin();

        if(preg_match('/invalid/',$result)) {
          echo "$result";
        }

        else {
          $email = $_POST["email"];
          $this->view->renderHomePage($email);
        }
      }

      if (isset($_POST['register'])) {
        $this->view->renderRegisterPage();

        $result = $this->model->register();

        if(preg_match('/error/',$result)) {
          echo "$result";
        }

        else {
          $email = $_POST["email"];
          $this->view->renderHomePage($email);
        }
      }

      if (isset($_POST['update'])) {
        $this->view->renderHomePage()();

        $result = $this->model->register();

        if(preg_match('/error/',$result)) {
          echo "$result";
        }

        else {
          $email = $_POST["email"];
          $this->view->renderHomePage($email);
        }
      }


    }

  }

?>
