<?php

include 'connection.php';



$title= $_POST['title'];
$description= $_POST['description'];
$price= $_POST['price'];
$stock= $_POST['stock'];


$query = mysqli_query($db, "INSERT INTO products(title, description, price, stock) VALUES ('$title, '$description', '$price', '$stock')");

if(mysqli_insert_id($db)){


  echo "The product with the following title was created succesfully : ". $title . "<br/>";

}
else{

  echo mysqli_error($db);

}
?>
