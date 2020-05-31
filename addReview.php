<?php
session_start();
$userName = $_SESSION["username"];
$bookname = $_SESSION["book"];

$rating = $_POST["rating"];
$quote = $_POST["favQuote"];
$character = $_POST["favChar"];
$theme = $_POST['favTheme'];
$rdescription = $_POST["revDescription"];

if($rating==""||$quote==""||$character==""||$rdescription==""){
  header("Location:addReview.html");
}
else{
  //sending data to databse
  include('config.php');

  //$sql = "DELETE FROM myDB.Books WHERE Book = 'Becoming'";
  $sql = "INSERT INTO myDB.Reviews (Rating,favQuote,favChar,favTheme,revDescription,book,username) VALUES ('$rating','$quote','$character','$theme','$rdescription','$bookname','$userName')";

//Creating a Review table for the new book to store future reviews
  if (!mysqli_query($conn,$sql)){
    die('Error: ' . mysqli_error($conn));
  }
  echo $_SESSION['book'];
  echo "Record added";
  echo "Username".$_SESSION['username'];
  mysqli_close($conn);

//Create a table for reviews for each user
  //redirecting to home page
  header("Location:home.phtml");
  }
 ?>
