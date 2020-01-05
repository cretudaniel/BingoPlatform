<?php

include 'connection.php';



$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];


$name_safe = mysqli_escape_string($db, $name); //,;\'"
$phone_safe = mysqli_escape_string($db, $phone);
$email_safe = mysqli_escape_string($db, $email);


$query = mysqli_query($db, "INSERT INTO contact(name, email, phone, message) VALUES ('$name_safe', '$email_safe', '$phone_safe', '$message')");

if(mysqli_insert_id($db)){


  echo "The message have been sent, ". $name . "<br/>";


}
else{
  echo mysqli_error($db);
}
