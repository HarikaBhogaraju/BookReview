<?php
$bname = $_POST["book_name"];
$author = $_POST["author_name"];
$genre = $_POST["genre"];
$description = $_POST["description"];

if($bname==""||$author==""||$genre==""||$description==""){
  echo "Please enter values in missing field/s";
}
else{
  //sending data to databse
  include('config.php');

  //$sql = "DELETE FROM myDB.Books WHERE Book = 'Harry Potter 2'";
  $sql = "INSERT INTO myDB.Books (Book,Author,Genre,Description) VALUES ('$bname','$author','$genre','$description')";

//Creating a Review table for the new book to store future reviews
  if (!mysqli_query($conn,$sql)){
    die('Error: ' . mysqli_error($conn));
  }
  session_start();

  $_SESSION['book'] = $bname;
  echo $_SESSION['book'];
  echo "Record added";
  echo "Username".$_SESSION['username'];
  mysqli_close($conn);

//Create a table for reviews for each user
  //redirecting to home page
  header("Location:addReview.html");
  }
 ?>
