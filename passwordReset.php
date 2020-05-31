<?php
  session_start();
  $npword = md5($_POST['new_password']);
  echo $npword;
  $email = $_SESSION['email'];
  echo $email;
  include('config.php');
  //finding user in Database
  $sql = "UPDATE myDB.Users SET password = '$npword' WHERE email = '$email'";
  $result = mysqli_query($conn,$sql);

  if (!mysqli_query($conn,$sql)){
    die('Error: ' . mysqli_error($conn));
  }
  header("Location:home.phtml");
 ?>
