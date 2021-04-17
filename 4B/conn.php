<?php
$servername = "localhost";
$username = "lavenda";
$password = "Lavenda01!@#";
$database  = "dumbways";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>