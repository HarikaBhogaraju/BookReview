<?php
//session.start();
$uname = $_POST["user_name"];
$pword = md5($_POST["password"]);

if($uname==""||$pword==""){
  echo "Please enter values in missing field/s";
  header("Location: index.html");
}
else{

  include('config.php');
  //finding user in Database
  $sql = "SELECT username, password FROM myDB.Users WHERE username = '$uname' and password ='$pword'";
  $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);

  if($count == 1) {
           session_start();
           $_SESSION["username"] = $uname;
           $_SESSION["logged"]==true;

           print_r($_SESSION);
           header("Location: home.phtml");
  }
  else {
           $error = "Your Login Name or Password is invalid";
           echo "$error";
           header("Location: index.html");
  }
}
mysqli_close($conn);
 ?>
