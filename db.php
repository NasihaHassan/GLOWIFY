<?php
$servername = "localhost"; // or your server name
$username = "root"; // your MySQL username
$password = "nasiha.h"; // your MySQL password
$dbname = "signupforms"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// else{
//   echo "We are successfully connecteddddd";
// }
?>
