<?php
	
	session_start();

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

		include 'connect.php'; 

		$agent = $_POST['agent'];
		$score = (int)$_POST['score'];
		session_start();
		$user = $_SESSION['id'];


		// sql to delete a record
		$sql = "INSERT INTO agents (agent, score, user) VALUES ('$agent', '$score', '$user')";

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