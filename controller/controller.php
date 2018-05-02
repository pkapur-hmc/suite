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

    public function invoke() {

      $cookieTypes = $this->model->getCookieTypes();
      $this->view->renderOrderForm($cookieTypes);
      if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["update"] != null) {

        $quantity = $_POST["quantity"];
        $variety = $_POST["variety"];
        $result = $this->model->updateCart($variety, $quantity);

        if(preg_match('/invalid/',$result)) {
          echo "$result";
        }
        else {
          $shoppingCart = $this->model->getCart();
          $this->view->renderCart($shoppingCart);
        }

      }

}


  }
?>
