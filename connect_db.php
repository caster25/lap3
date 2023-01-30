<?php
$servername = "localhost";
$username = "cpe1991";
$password = "Tee@75315900";
$db_name = "cpe1991";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>