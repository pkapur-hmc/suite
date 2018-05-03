<?php
require('dbconn.php');




class Model {
	$db = connect_to_db("SUITE");

	public function getlogin() {

		if (empty($_POST["email"])) {
			$emailErr = "Please enter a valid email";
		}
	  
		else {
			$email = ($_POST["email"]);
		}
		
		if (empty($_POST["password"])) {
			$passwordErr = "Please enter a password";
		}
		
		else {
			$password = ($_POST["password"]);
		}
		
		if ($emailErr == "" && $passwordErr == "") {
		
			$query = "SELECT stud_id FROM Student where email=? AND password=?";
			$selectUser = $db -> prepare($query);
			echo $db->error;
			$hashedPassword = crypt($password,"sweet");
			$selectUser -> bind_param("ss", $email, $hashedPassword);
			mysqli_stmt_execute($selectUser);
			$selectUser -> bind_result($stud_id);
		
			if ($selectUser -> fetch()) {
				$_SESSION['stud_id'] = $stud_id;
				$_SESSION['email'] = $email;
				mysqli_stmt_close($selectUser);
				return "login";
			}
			else {
				return "invalid user";
			}
		}
	}

	public function register() {

		if (empty($_POST["email"])) {
			$emailErr = "Please enter a valid email";
		}
		else {
			$email = ($_POST["email"]);
		}
		
		if (empty($_POST["password"])) {
			$passwordErr = "Please enter a password";
		}
		else {
			$password = ($_POST["password"]);
		}

		if (empty($_POST["name"])) {
			$nameErr = "Please enter a name";
		}
		else {
			$name = ($_POST["name"]);
		}

		if (empty($_POST["year"])) {
			$yearErr = "Please enter a year";
		}
		else {
			$year = ($_POST["year"]);
		}

		if (empty($_POST["room"])) {
			$roomErr = "Please enter a room";
		}
		else {
			$room = ($_POST["room"]);
		}

		if (empty($_POST["suite"])) {
			$suiteErr = "Please enter a suite";
		}
		else {
			$suite = ($_POST["suite"]);
		}

		if ($emailErr == "" && $passwordErr == "" && $nameErr == "" && $yearErr == "" && $roomErr == "" && $suiteErr == "") {
			$sql = "INSERT INTO MyGuests (name, email, password, year, room, suite)
				VALUES ($name, $email, $password, $year, $room, $suite)";

			if (mysqli_query($db, $sql)) {
				echo "You are registered!";
				return 'registered';
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
				return 'error connecting to database';
			}
		}
	}

	public function getStudentStatus($studID) {
		$sql = "SELECT suite FROM Student WHERE stud_id = ".$studID;
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result));
			$status = $row['status'];
		return $status
	}

	public function updateStatus() {
		$stud_id = $_SESSION['stud_id'];
		$email = $_SESSION['email'];

		$sql = "SELECT status FROM Student WHERE email = ".$email;
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result));
			$status = $row['status'];
			$getStatusName = "SELECT SL.name FROM StatusList SL, Student S, Status St  WHERE S.status = SL.userStatusID S.email = ".$email;
		else {
			echo "Invalid student";
		}

		$sql = "SELECT suite FROM Student WHERE email = ".$email;
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result));
			$suite_id = $row['suite'];
		else {
			echo "Invalid student";
		}

		$sql = "SELECT suite FROM Student WHERE stud_id = ".$stud_id;

	}

	public function 

}

?>
