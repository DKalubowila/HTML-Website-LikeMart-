<?php
$servername = '127.0.0.1';
$username = "root"; //enter your username
$password = ""; //password
$db = ''; //database name

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>