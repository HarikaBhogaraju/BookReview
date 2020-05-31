<?php
include('config.php');
//$sql = "DELETE FROM myDB.Users WHERE username = 'harika14'";
$sql = "SELECT * FROM myDB.Books WHERE Book LIKE '%".$search."%'";
$result = mysqli_query($conn,$sql);
if (!mysqli_query($conn,$sql)){
  die('Error: ' . mysqli_error($conn));
}
else{
  while($row = $result->fetch_assoc()){
   echo $row['Book'];
  }
}

?>
