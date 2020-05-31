<?php
  $email = $_POST['email'];
  include('config.php');
  //finding user in Database
  $sql = "SELECT email FROM myDB.Users WHERE email = '$email'";
  $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);

  if($count==1){
    session_start();
    $_SESSION['email'] = $email;
    header("Location:changePassword.html");
  }
  else{
    header("Location:index.html");
  }
 ?>
