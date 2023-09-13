<?php
$servername = "localhost";
$username = "tch";
$password = "Aumtch_1";
$db = "tch";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>