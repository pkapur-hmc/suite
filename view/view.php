<?php

class View {
	public function __construct($model)  {
      $this->model = $model;
  	}

	// public function renderCart($shoppingCart) {
  //     	include_once("viewcart.php");
 	// }
  //
	// public function renderOrderForm($cookieTypes){
  //   	include_once("orderForm.php");
	// }

	public function renderLoginPage() {
		include_once("login.php");
	}

	public function renderHomePage($email) {
		include_once("home.php");
	}

	public function renderRegisterPage() {
		include_once("register.php");
	}
}

?>
