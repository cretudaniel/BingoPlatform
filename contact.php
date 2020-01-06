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
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Bingo</title>
  <meta name="description" content="Bingo - Online selling platform ">
  <meta name="Bingo" content="selling and buying">
  <!-- Bootstrap link -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" rel='stylesheet'>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!-- Extra CSS that i need -->
  <link href="css/maincss.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="css/animations.css" rel="stylesheet">
  <!-- The awesome font icon pack -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
 <!-- diper -->
  <!-- Here is the header , sticky one-->

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm sticky-top" style="padding-left:10px; padding-right:10px;">

      <h5 class="my-0 mr-md-auto font-weight-bold" > <a class="p-3" href="main.php" style="text-decoration:none;">BINGO</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-3 text-dark" href="contact.php">Contact</a>
      <a class="p-3 text-dark" href="#">Language</a>



      <?php
      if($val_check="1"){
        // echo '<a class="btn btn-outline-primary" href="logout.php">LOG OUT</a>';
  //GOOD WORKING THING DOWN HERE
       echo '<a class="btn btn-outline-primary" href="user.php">You are logged-in as: '.$username.'</a>';
  //GOOD WORKING THING UP HERE
        //echo $username;
        //console.log($val_check);
      }else{
      echo '<a class="btn btn-outline-primary" href="signin.php">Sign up</a>';
      //bsdiper
    }
    ?>
    <a class="btn btn-outline-danger" href="logout.php">X</a>
    </nav>
    </div>


  <!-- THE END OF THE HEADER -->
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-0 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">

  <div class="col-8 offset-2 jumbotron"
   style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6); padding-top:15px;">

    <h1 class="display-3 font-weight-bold slide-in-blurred-top "style="color: #008bff;text-shadow: 2px 2px 4px #ffffff;">BINGO</h1>
    <span class="col-12 badge badge-success" style="display:none;" id="verde">The message have been sent!</span>

      <form action="contactadd.php" method="POST">

      <p class="user">
        <p>Please let us know what is your problem.</p>

  <input type="text" placeholder="Your name" name="name" class="form-control" id="name"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
  </br>
  <input type="email" placeholder="Your email" name="email" class="form-control" id="email"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
  </br>
  <input type="text" placeholder="Your phone number" name="phone" class="form-control" id="phone"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
<br />
  <textarea placeholder="Your message" name="message" class="form-control" id="message"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);" rows="3"></textarea>
<br />


</p>
    <button class="btn btn-info" id="1"
    style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6); float:center;">
     Contact us!</button>
          </form>
      </div>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block "></div>
</div>

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

  <script src="js/jquery.js"> </script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
  	$(document).ready(function () {
  		$("#1").click(function (event){
  			event.preventDefault();
  	var name;
  	var email;
  	var phone;
    var email;
    var message;

  	name= $("#name").val();
  	email= $("#email").val();
  	phone= $("#phone").val();
    message= $("#message").val();
  	console.log(name, email, phone);
  $.post("contactadd.php", {name: name, email: email ,phone: phone, message: message},
  function(data){
  		$("#verde").html(data);
  		$("#verde").fadeIn('slow');
  });

  		});
  	});
  </script>

</body>

</html>
