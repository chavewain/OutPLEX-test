<?php


debug_backtrace() || die ("Direct access not permitted");


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "OutPLEX";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}