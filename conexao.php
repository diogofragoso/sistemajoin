<?php

$servername = "localhost";
$usernameBD = "root";
$password = "";
$dbname = "sistema";

// Create connection
$conn = new mysqli($servername, $usernameBD, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>

