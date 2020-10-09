<?php
	

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


	public function checkLoginStatus(){

		session_start();

		if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		  header("location: dashboard.php");
		  exit;
		}

	}

	public function login(){

		

	}
	