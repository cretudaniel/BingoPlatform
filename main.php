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
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/maincss.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="css/animations.css" rel="stylesheet">
  <!-- The awesome font icon pack -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <!-- Here is the header , sticky one-->


  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-1 bg-white border-bottom shadow sticky-top" style="padding-left:10px; padding-right:10px;">

      <h5 class="my-0 mr-md-auto font-weight-bold" > <a class="p-3" href="main.php" style="text-decoration:none; ">BINGO</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-3 text-dark" href="contact.php">Contact</a>
      <a class="p-3 text-dark" href="#">Language</a>
    </nav>

      <?php
      if($val_check="1"){
        echo '<a class="btn btn-outline-primary" href="logout.php">LOG OUT</a>';
//GOOD WORKING THING DOWN HERE
      //  echo '<a class="btn btn-outline-primary" href="logout.php">You are logged-in as: '.$username.'</a>';
//GOOD WORKING THING UP HERE
        //echo $username;
        //console.log($val_check);
      }else{
      echo '<a class="btn btn-outline-primary" href="signin.php">Sign up</a>';
      //bsdiper
    }
    ?>
    </div>


  <!-- THE END OF THE HEADER -->

  <!-- THE MAIN ANNOUCEMENT ABOUT THE APP WITH A CREATE ACCOUNT BUTTON-->

<div class="position-relative overflow-visible p-6 p-md-5 m-md-0 text-center bg-light">
  <div class="col-md-5 p-lg-3 mx-auto my-3 ">
       <h1 class="display-3 font-weight-bold slide-in-blurred-top "style="color: #008bff;text-shadow: 2px 2px 4px #ffffff;">BINGO</h1>
       <p class="lead font-weight-normal slide-in-blurred-top">Best platform for selling your goods in a modern way.</p>
       <a class="btn btn-outline-info" href="login.php">Go shopping!</a>
     </div>
     </div>

   <!-- THE END OF THE MAiN ANNOUCEMENT -->
   <!--
    <div class="position-relative overflow-hidden p-0 p-md-0 m-md-0 text-center bg-light">

          <img src="images/png4.png">

        </div>
      -->


      <div class="position-relative overflow-visible p-0 p-md5-0 m-md-0 bg-light ">
      </section>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      </div>


<!-- In this footer i can't get the text color white so i need to use everytime a style instruction
      i've tried using a class for this but it's not working , i don't know why -Daniel -->
<!--
<footer class="section footer-classic context-dark bg-image" style="background: rgb(33,37,41);text-decoration:none;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <br>
                <h5 style="color:white;">Who are we?</h5>
                <br>
                <p style="color:white;">We are the best trading goods platform! Our motto is "Buy it , use it , sell it!" We belive in what we are doing an hope you will find here the perfect place to sell your items.</p>

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
                <li><a href="#">CATEGORY</a></li>
                <li><a href="#">REGISTER</a></li>
                <li><a href="contact.php">CONTACT</a></li>

              </ul>
            </div>
          </div>
        </div>
      </footer>
-->
      <!-- THE END OF THE FOOTER -->
      <footer id="sticky-footer" class="py-3  border-top border-info shadow-sm text-white" style="z-index:10;bottom:0px;position:fixed; width:100%; background-color: /*#e5e5e5*/ #333333 ;">
   <div class="container text-center">
     <!--Facebook-->
     <a class="btn btn-social-icon btn-lg btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-lg']);"><i class="fa fa-facebook"></i></a> &nbsp;
     <!--Bitbucket-->
     <a class="btn btn-social-icon btn-lg btn-bitbucket" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-lg']);"><i class="fa fa-bitbucket"></i></a>&nbsp;&nbsp;
     <!--Twitter-->
     <a class="btn btn-social-icon btn-lg btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-lg']);"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
     <!--GMAIL-->
     <a class="btn btn-social-icon btn-lg btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-lg']);"><i class="fa fa-google"></i></a>&nbsp;&nbsp;
   </div>
 </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
