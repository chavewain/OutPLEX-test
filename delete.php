<?php
	
	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

		include 'connect.php'; 

		// sql to delete a record
		$sql = "DELETE FROM agents WHERE id=".$_GET['agent'];

		if ($conn->query($sql) === TRUE) {

			header("location: dashboard.php");

		} else {

			$error = $_SESSION["error"] = "Error deleting record: " . $conn->error;

		}

		$conn->close();

	}else{
		echo 'You must login before do this action';
	}


	

?>