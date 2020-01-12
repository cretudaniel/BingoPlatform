<?php

include 'connection.php';
session_start();
if (isset($_SESSION['username'])) {
  $val_check=1;
  $username=$_SESSION['username'];
}
else {
   header("Location: login.php");
}




$nume= $_POST['nume'];
$pret = $_POST['pret'];
$categorie = $_POST['categorie'];
$locatie = $_POST['cantitate'];
$phone = $_POST['phone'];

$nume_safe = mysqli_escape_string($db, $nume); //,;\'"
$pret_safe = mysqli_escape_string($db, $pret);
$categorie_safe = mysqli_escape_string($db, $categorie);
$locatie_safe = mysqli_escape_string($db, $cantitate);
$imagine_nume= $_FILES['imagine']['name'];
$today = getdate();
$y= $today['year'];
$m= $today['mon'];
$d= $today['mday'];
// echo $y;
// echo $m;
// echo $d;
$date= $y.$m.$d;
// echo $date;
$query = mysqli_query($db, "INSERT INTO items(name, price, category, location, photo, user_name, date, phone) VALUES ('$nume_safe', '$pret_safe', '$categorie_safe', '$locatie_safe', '$imagine_nume', '$username', '$date', '$phone')");
if(mysqli_insert_id($db)){

   move_uploaded_file($_FILES['imagine']['tmp_name'], "imagini/" . $imagine_nume);
   echo "Am adaugat produsul cu numele : ". $nume . "<br/>";
   echo "Pretul produsului este : ". $pret . "<br/>";
   echo "Face parte din categoria : ". $categorie. "<br/>";


 }
 else{
   echo mysqli_error($db);
 }

// $ImageName = $_FILES['imagine']['name'];
// $fileElementName = 'imagine';
// $path = 'imagini/';
// $location = $path . $_FILES['imagine']['name'];
// move_uploaded_file($_FILES['imagine']['tmp_name'], $location);
// // $uploaddir = '/webapp/imagini';
// // $uploadfile = $uploaddir . $_FILES['imagine']['name'];
//
//
// $query = mysqli_query($db, "SELECT * FROM items WHERE username='$username' AND name='$nume_safe'");
// if (mysqli_num_rows($query)) {
//     $sql="UPDATE items SET photo='$ImageName' WHERE username='$username' AND name='$nume_safe'";
//     if (mysqli_query($db, $sql)) {
//         //  echo "Record updated successfully";
//       } else {
//           echo "Error updating record: " . mysqli_error($conn);
//         }
// }
