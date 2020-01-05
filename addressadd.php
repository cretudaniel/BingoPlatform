<?php

include 'connection.php';



$address1= $_POST['address1'];
$address2= $_POST['address2'];
$city= $_POST['city'];
$postal_code= $_POST['postal_code'];


$query = mysqli_query($db, "INSERT INTO address(address1, address2, city, postal_code) VALUES ('$address1, '$address2', '$city', '$postal_code')");

if(mysqli_insert_id($db)){


  echo "The currently address is : ". $address1 . "<br/>";
  echo "The second address is : ". $address2 . "<br/>";
  echo "The city is : ". $city . "<br/>";
  echo "The postal code is : ". $postal_code . "<br/>";

}
else{

  echo mysqli_error($db);

}
?>
