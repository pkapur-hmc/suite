<?php
require('dbconn.php');




class Model {
	$db = connect_to_db("SUITE");

	public function getlogin() {
 		// here goes some hardcoded values to simulate the database
		if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {

 			if ($_REQUEST['username']=='admin' && $_REQUEST['password']=='admin') {
  			return 'login';
 			}
  		else {
  			return 'invalid user';
 			}
		}
 	}

	public function getStatus() {
		return $this->status
	}

	public function updateStatus() {

	}

	public function 

}

?>
