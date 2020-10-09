<?php
	
	require_once "connect.php";
 
	// Define variables and initialize with empty values
	$username = $password = "";
	$username_err = $password_err = "";

	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	 	
	    // Verifiying username

	    if(empty(trim($_POST["username"]))){
	        $username_error = "Please enter username.";
	    } else{
	        $username = trim($_POST["username"]);
	    }
	    
	    // Verifiying password

	    if(empty(trim($_POST["password"]))){
	        $password_error = "Please enter your password.";
	    } else{
	        $password = trim($_POST["password"]);
	    }
	    
	    // Verifiying credentials

	    if(empty($username_err) && empty($password_err)){

	    	$sql = "SELECT * From users WHERE username = '{$username}' LIMIT 1";
	        $result = $conn->query($sql);
	        $row = $result->fetch_assoc();


	        if(!$query){
	           $error =  mysqli_error($conn);
	        }

	        // exit(md5($password));
	       	
	        if($row['password'] == md5($password)){

	        	session_start();
                            
	            // Store data in session variables
	            $_SESSION["loggedin"] = true;
	            $_SESSION["id"] = $id;
	            $_SESSION["username"] = $username;   

	        	header("Location: dashboard.php");
	        	
	        }else{
	        	$error =  "Invalid username or password!";
	        }

	        
	    }
	    
	    // Close connection
	    mysqli_close($link);
	}