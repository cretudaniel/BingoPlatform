<?php

include 'connection.php';



$username= $_POST['username'];
$password= $_POST['password'];
$name= $_POST['name'];
$email= $_POST['email'];
$surname= $_POST['surname'];
$age= $_POST['age'];
$city= $_POST['city'];

$username_safe = mysqli_escape_string($db, $username); //,;\'"
$password_safe = mysqli_escape_string($db, $password);
$name_safe = mysqli_escape_string($db, $name);

$query = mysqli_query($db, "INSERT INTO user(username, password, name, mail, surname, age, city) VALUES ('$username_safe', '$password_safe', '$name_safe', '$email', '$surname', '$age', '$city')");

if(mysqli_insert_id($db)){


  echo "The account with the following username was created succesfully : ". $username . "<br/>";
  echo "The account password is the following : ". $password . "<br/>";


}
else{
  echo mysqli_error($db);
}
