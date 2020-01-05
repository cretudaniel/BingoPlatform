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
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Extra CSS that i need -->
  <link href="maincss.css" rel="stylesheet">
  <link href="animations.css" rel="stylesheet">
  <!-- The awesome font icon pack -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <!-- Here is the header , sticky one-->

<nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between" style="padding-left:10px; padding-right:10px; max-width:1620px;">
      <a class="py-2 d-none d-md-inline-block" href="main.php" style="font-weight:bold;">BINGO </a>
      <a class="py-2 d-none d-md-inline-block">&nbsp</a>
      <a class="py-2 d-none d-md-inline-block">&nbsp</a>
      <a class="py-2 d-none d-md-inline-block">&nbsp</a>

      <?php
      if($val_check="1"){
        echo '<a class="py-2 d-none d-md-inline-block" href="logout.php">You are logged-in as: '.$username.'</a>';
        //echo $username;
        //console.log($val_check);
      }else{
      echo '<a class="py-2 d-none d-md-inline-block" href="">LOGIN</a>';
      //bsdiper
    }
    ?>
    </div>
  </nav>

  <!-- THE END OF THE HEADER -->

  <!-- THE MAIN ANNOUCEMENT ABOUT THE APP WITH A CREATE ACCOUNT BUTTON-->

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
       <h1 class="display-4 font-weight-bold slide-in-blurred-top">BINGO</h1>
       <p class="lead font-weight-normal slide-in-left">Best platform for selling your goods in a modern way.</p>
       <a class="btn btn-outline-secondary" href="login.php">Go shopping!</a>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block "></div>
</div>

    <!-- THE END OF THE MAiN ANNOUCEMENT -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    saas
</div>

<div class="container-fluid">
    <p>asdasdasd </p>
</div>
<!-- In this footer i can't get the text color white so i need to use everytime a style instruction
      i've tried using a class for this but it's not working , i don't know why -Daniel -->
<footer class="section footer-classic context-dark bg-image" style="background: rgb(33,37,41);text-decoration:none;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <br>
                <h5 style="color:white;">Who are we?</h5>
                <br>
                <p style="color:white;">We are the best trading goods platform! Our motto is "Buy it , use it , sell it!" We belive in what we are doing an hope you will find here the perfect place to sell your items.</p>
                <!-- Rights-->
                <p class="rights whiteee" style="color:white;"><span>©  </span><span class="copyright-year white" style="color:white;">2019-2020</span><span> </span><span>Team Brain Buddies</span><span>. </span><span></span></p>

            </div>
            <div class="col-md-4" style="color:white;">
              <br>
              <h5>Contacts</h5>
              <br>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>Maribor, FERI University, 2000 </dd>
              </dl>
              <dl class="contact-list" style="text-decoration:none;">
                <dt>EMAIL:</dt>
                <dd style="text-decoration:none;"><a href="mailto:#" style="text-decoration:none;">bingoteamcontact@gmail.com</a></dd>
              </dl>

            </div>
            <div class="col-md-4 col-xl-3" style="color:white;">
              <br>
              <h5>&nbsp &nbsp &nbsp Links</h5>
              <br>
              <ul class="nav-list" style="text-decoration:none;">
                <li style="text-decoration:none;"><a href="main.php">HOME</a></li>
                <li style="text-decoration:none;"><a href="whoarewe.php">WHO ARE WE?</a></li>
                <li style="text-decoration:none;"><a href="#">CATEGORY</a></li>
                <li style="text-decoration:none;"><a href="signin.php">REGISTER</a></li>
                <li style="text-decoration:none;"><a href="contact.php">CONTACT</a></li>
                <li style="text-decoration:none;"><a href="dropdown.php">PRODUCTS</a></li>

              </ul>
            </div>
          </div>
        </div>

      </footer>
      <!-- THE END OF THE FOOTER -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
