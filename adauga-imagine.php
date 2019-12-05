<?php

include 'connection.php';
session_start();
if (isset($_SESSION['username'])) {
  $username=$_SESSION['username'];
}
else {
   header("Location: login.php");
}
$ImageName = $_FILES['imagine']['name'];
$fileElementName = 'imagine';
$path = 'imagini/';
$location = $path . $_FILES['imagine']['name'];
move_uploaded_file($_FILES['imagine']['tmp_name'], $location);
// $uploaddir = '/webapp/imagini';
// $uploadfile = $uploaddir . $_FILES['imagine']['name'];


$query = mysqli_query($db, "SELECT * FROM user WHERE username='$username'");
if (mysqli_num_rows($query)) {
    $sql="UPDATE user SET photo='$ImageName' WHERE username='$username'";
    if (mysqli_query($db, $sql)) {
        //  echo "Record updated successfully";
      } else {
          echo "Error updating record: " . mysqli_error($conn);
        }
}

//GOOD CODE
// $query = mysqli_query($db, "INSERT INTO user(photo) VALUES ('$ImageName')");
//  if(mysqli_insert_id($db)){
//    echo "good job";
//  }
//  else{
//    echo mysqli_error($db);
//  }
