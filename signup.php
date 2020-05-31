<?php
$uname = $_POST["user_name"];
$email = $_POST["email"];
$pword = md5($_POST["password"]);

if($uname==""||$email==""||$pword==""){
  echo "Please enter values in missing field/s";
}
else{
  include('config.php');


  //$sql = "DELETE FROM myDB.Users WHERE username = 'harika14'";
  $sql = "INSERT INTO myDB.Users (username,email,password) VALUES ('$uname','$email','$pword')";

  if (!mysqli_query($conn,$sql)){
    die('Error: ' . mysqli_error($conn));
  }
  session_start();
  $_SESSION["username"] = $uname;
  $_SESSION["logged"]==true;

  print_r($_SESSION);
  echo "Record added";
  mysqli_close($conn);

//Create a table for reviews for each user
  //redirecting to home page
  header("Location:home.phtml");
  }
 ?>
