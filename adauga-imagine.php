<?php

include 'connection.php';

$imagine_name= $_FILES['imagine']['name'];

$query = mysqli_query($db, "INSERT INTO user(photo) VALUES ('$imagine_name')");
if(mysqli_insert_id($db)){

  move_uploaded_file($_FILES['imagine']['tmp_name'], "imagini/" . $imagine_nume);
  echo "Am adaugat imaginea";
}
else{
  echo mysqli_error($db);
}
