<?php

include 'connection.php';


$order_id= $_POST['order_id'];
$product_id= $_POST['product_id'];
$quantity= $_POST['quantity'];


$query = mysqli_query($db, "INSERT INTO orders_products(order_id, product_id, quantity) VALUES ('$order_id', '$product_id', '$quantity')");

if(mysqli_insert_id($db)){


  echo "The following product has been purchased succesfully : ". $product_id . "<br/>";
  echo "The order is the following : ". $order_id . "<br/>";


}
else{
  echo mysqli_error($db);
}
?>
