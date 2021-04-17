<?php
$servername = "localhost";
$username = "yourname";
$password = "password";
$database  = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
