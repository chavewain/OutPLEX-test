<?php
	// Initialize session
	session_start();
	 
	// Unset session variables
	$_SESSION = array();
	 
	// Destroy the session.
	session_destroy();
	 
	// Go to dashboard
	header("location: login.php");

	exit;
?>