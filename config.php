<?php
//sending data to databse
$servername = "localhost";
$username = "dbadmin";
$password = "a1b2c3d4e5";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//selecting the database
$select = mysqli_select_db($dbname,$conn);

 ?>
