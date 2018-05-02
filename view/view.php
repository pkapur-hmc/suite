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

	public function renderHomePage($user) {
		include_once("home.php");
	}

	public function registerPage() {
		include_once("register.php");
	}
}

?>
