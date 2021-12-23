<?php
$servername = "192.168.3.37";
$username = "grdbuser";
$password = "Grdbuser@1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>