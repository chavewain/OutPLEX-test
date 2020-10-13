<?php
	
	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

		include 'connect.php'; 

		$id = $_POST['id'];
		$agent = $_POST['agent'];
		$score = (int)$_POST['score'];

		session_start();
		$user = $_SESSION['id'];


		// sql to delete a record
		$sql = "UPDATE agents SET agent = '$agent', score = '$score', user = '$user' WHERE id = '$id'";

		if ($conn->query($sql) === TRUE) {

			header("location: dashboard.php");

		} else {

		echo $_SESSION["error"] = "Error adding record: " . $conn->error;

		}

		$conn->close();

	}else{
		echo 'You must login before do this action';
	}


	

?>