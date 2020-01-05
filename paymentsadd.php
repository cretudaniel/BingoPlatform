<?php

include 'connection.php';


$order_id= $_POST['order_id'];
$failed= $_POST['failed']; <-- ! this is for to now if the pay was ok-->
$transaction_id= $_POST['transaction_id'];


$query = mysqli_query($db, "INSERT INTO payments(order_id, failed, transaction_id) VALUES ('$order_id', '$failed', '$transaction_id')");

if(mysqli_insert_id($db)){

  echo "The order is the following : ". $order_id . "<br/>";

}
else{
  echo mysqli_error($db);
}
?>
