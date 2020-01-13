<?php

include 'connection.php';

session_start();

if (isset($_SESSION['username'])) {
  $val_check=1;
  $username=$_SESSION['username'];
} else {
    header("Location: login.php");
}
//$query = mysqli_query($db, "SELECT username FROM user WHERE username='$username' AND password='$password'");
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Bingo</title>
  <meta name="description" content="Bingo - Online selling platform ">
  <meta name="Bingo" content="selling and buying">
  <!-- Bootstrap link -->
<!--  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
-->
<!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
-->
  <!-- Extra CSS that i need -->
  <link href="/webapp/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" rel='stylesheet'>
  <link href="/webapp/css/animations.css" rel="stylesheet">
  <!-- The awesome font icon pack -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/webapp/css/maincss.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
  <link href="css3.css?version=15" rel="stylesheet">
  <script src="https://kit.fontawesome.com/835a1fdbc1.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Here is the header , sticky one-->


  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-1 bg-white border-bottom shadow sticky-top" style="padding-left:10px; padding-right:10px;">

      <h5 class="my-0 mr-md-auto font-weight-bold bettersize" > <a class="p-3" href="main.php" style="text-decoration:none; ">BINGO</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-3 text-dark bold" href="item.php">List an item</a>
      <a class="p-3 text-dark bold" href="contact.php">Contact</a>
      <a class="p-3 text-dark bold" href="#">Language</a>
      <!-- <input class=" mr-sm-2 bold padding" placeholder="Search for an item" style="padding-bottom:6px;">
      <button class="btn btn-outline-success my-2 my-sm-0 bold" type="submit">Search</button> -->

      <?php
      if($val_check="1"){
        // echo '<a class="btn btn-outline-primary" href="logout.php">LOG OUT</a>';
  //GOOD WORKING THING DOWN HERE
       echo '<a class="btn btn-outline-primary" href="/webapp/user.php">You are logged-in as: '.$username.'</a>';
  //GOOD WORKING THING UP HERE
        //echo $username;
        //console.log($val_check);
      }else{
      echo '<a class="btn btn-outline-primary" href="/webapp/signin.php">Sign up</a>';
      //bsdiper
    }
    ?>
    <a class="btn btn-outline-danger" href="logout.php">X</a>
    </nav>
    </div>


  <!-- THE END OF THE HEADER -->

<div class="cat-page">

  <div class="cat-left">
    <h1>Please choose the category</h1>
    <h6>Automotive</h6>
    <a href="categorys.php?cat=cars">cars</a>
    <a href="categorys.php?cat=bikes">bikes</a>
    <a href="categorys.php?cat=scooters">scooters</a>
    <a href="categorys.php?cat=busses">busses</a>
    <a href="categorys.php?cat=trucks">trucks</a>
    <h6>Electronics</h6>
    <a href="categorys.php?cat=smarttv">smart tv's</a>
    <a href="categorys.php?cat=phones">phones</a>
    <a href="categorys.php?cat=watches">watches</a>
    <a href="categorys.php?cat=pc">personal computers</a>
    <a href="categorys.php?cat=laptops">laptops</a>
    <h6>Houses</h6>
    <a href="categorys.php?cat=house%20for%20sale">for sale</a>
    <a href="categorys.php?cat=house%20for%20rent">for rent</a>
    <a href="categorys.php?cat=lands">lands</a>
    <h6>Pets</h6>
    <a href="categorys.php?cat=cats">cats</a>
    <a href="categorys.php?cat=dogs">dogs</a>
    <a href="categorys.php?cat=fishs">fishs</a>
    <a href="categorys.php?cat=birds">birds</a>
    <h6>Clothes</h6>
    <a href="categorys.php?cat=clothes%20for%20him">for him</a>
    <a href="categorys.php?cat=clothes%20for%20her">for her</a>
    <a href="categorys.php?cat=clothes%20for%20kids">for kids</a>
  </div>
  <?php
  $id=$_GET["id"];
  $result = mysqli_query($db,"SELECT * FROM items WHERE id='$id'");
  $i=0;
  while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
    $id=$row['id'];
    $name=$row['name'];
    $price=$row['price'];
    $category=$row['category'];
    $location=$row['location'];
    $photo=$row['photo'];
    $username=$row['user_name'];
    $year=$row['year'];
    $phone=$row['phone'];
    $description=$row['description'];
    $views= rand(50, 150);
  }
   ?>
  <div class="cat-right">

<div class="colu colu-l">
    <img class="one-edge-shadow" src="imagini/<?php echo $photo ?>" alt="photo" width="700px" height="500px" style="border-radius:25px;">
</div>
<div class="colu colu-r">
  <h2><?php echo $name  ?></h2>
  <br>
  <p>Price: <span><?php echo $price?> $</span></p>
  <p>Category: <span><?php echo $category?> </span></p>
  <p>Location: <span><?php echo $location?> </span></p>
  <p>User who own this: <span><a href="restoftheusers.php?id=<?php echo $username?>"><?php echo $username?> </a></span></p>
  <p>Year: <span><?php echo $year?> </span></p>
  <p>Views: <span><?php echo $views?> </span></p>
  <p>Phone number: <span><?php echo $phone?> </span></p>
  <p>Description: <span><?php echo $description?> </span></p>


</div>


  <!-- TEST FOR THE ID DELETE VIEWER ETC -->
        <?php
        // <section class="row row2">
        // <div class="col col2">
        //   <div class="continut2">
        //     <div class="imagine2" style="  background: url(imagini/bmw.jpg);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: 100% 100%;">
        //     <!-- <img src="imagini/bmw.jpg"> -->
        //   </div>
        //   <div class="details2">
        //   <h3> NUME PRODUS LA VANZARE <span class="pret">2000$</span></h3>
        //   </div>
        // </div>
        // </div>
        // <div class="col col2">
        //   <div class="continut2">
        //     <div class="imagine2" style="  background: url(imagini/bmw.jpg);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: 100% 100%;">
        //     <!-- <img src="imagini/bmw.jpg"> -->
        //   </div>
        //   <div class="details2">
        //   <h3> NUME PRODUS LA VANZARE <span class="pret">2000$</span></h3>
        //   </div>
        // </div>
        // </div>
        // <div class="col col2">
        //   <div class="continut2">
        //   <div class="imagine2" style="  background: url(imagini/bmw.jpg);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: 100% 100%;">
        //     <!-- <img src="imagini/bmw.jpg"> -->
        //   </div>
        //   <div class="details2">
        //   <h3> NUME PRODUS LA VANZARE <span class="pret">2000$</span></h3>
        //   </div>
        // </div>
        // </div>
        // <div class="col col2">
        //   <div class="continut2">
        //     <div class="imagine2" style="  background: url(imagini/bmw.jpg);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: 100% 100%;">
        //     <!-- <img src="imagini/bmw.jpg"> -->
        //   </div>
        //   <div class="details2">
        //   <h3> NUME PRODUS LA VANZARE <span class="pret">2000$</span></h3>
        //   </div>
        // </div>
        // </div>
        // <div class="col col2">
        //   <div class="continut2">
        //     <div class="imagine2" style="  background: url(imagini/bmw.jpg);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: 100% 100%;">
        //     <!-- <img src="imagini/bmw.jpg"> -->
        //   </div>
        //   <div class="details2">
        //   <h3> NUME PRODUS LA VANZARE <span class="pret">2000$</span></h3>
        //   </div>
        // </div>
        // </div>
        //
        // </section>



            // $result = mysqli_query($db,"SELECT * FROM user");
            //
            //   echo "
            //   <table>
            //     <tr>
            //     <th>
            //     USER
            //     </th>
            //     <th>
            //     ID
            //     </th>
            //     </tr>";
            //     while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
            //     echo "<tr>
            //       <td>
            //         ";
            //         $username2=$row['username'];
            //         $id=$row['id'];
            //         echo $username2;
            //       echo "
            //       </td>
            //       <td>".$id."
            //       </td>
            //       <td>
            //       <button type='button' class=\"deletebutton\" id='$id' data-id='$id' name='id2' onclick=\"window.location.href = 'restoftheusers.php?id=".$id."';\"> SEE </button>
            //       </td>
            //     </tr>
            //   ";
            // };
            // echo "
            //   </table>";

  // href= url custom
  // get method
         ?>
        </div>
      </div>
      <div class="footer1">
        <p>&nbsp;</p>
      </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
  </html>
