<?php

include 'connection.php';



$total= $_POST['total'];
$address_id= $_POST['address_id'];
$paid= $_POST['paid'];
$user_id= $_POST['user_id'];


$query = mysqli_query($db, "INSERT INTO orders(total, address_id, paid, user_id) VALUES ('$total, '$address_id', '$paid', '$user_id')");

if(mysqli_insert_id($db)){


  echo "The total price is : ". $total . "<br/>";
  echo "The order will be sent to the address  : ". $address_id . "<br/>";

}
else{

  echo mysqli_error($db);

}
?>
