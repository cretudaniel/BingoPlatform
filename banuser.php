<?php

include 'connection.php';

session_start();

if (isset($_SESSION['username'])) {
  $username=$_SESSION['username'];
} else {
    header("Location: login.php");
}
$result = mysqli_query($db,"SELECT * FROM user WHERE username='$username' ");
while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
  $admintest=$row['usercategory'];
};
if($admintest != "1")
  header("Location: logout.php");

//$query = mysqli_query($db, "SELECT username FROM user WHERE username='$username' AND password='$password'");

$idbanned=$_GET["id"];
$result = mysqli_query($db,"SELECT * FROM user WHERE id='$idbanned' ");
while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
  $usernamebanned=$row['username'];
  $emailbanned=$row['mail'];
};

$query = mysqli_query($db, "INSERT INTO banlist(username, email, id) VALUES ('$usernamebanned', '$emailbanned', '$idbanned')");

if(mysqli_insert_id($db)){

  echo "The account has been successfully banned";

}
else{
  echo mysqli_error($db);
}
