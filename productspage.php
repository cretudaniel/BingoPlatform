<!DOCTYPE html>
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


  <link href="style.css" rel="stylesheet" type="text/css">

  <style>
  body{
    background-color: #F7F9F9;
  }
  #container ul {
    list-style: none;
  }
  #container ul li{
    background-color: #8E44AD;
    width: 150px;
    border: 1px solid white;
    height: 50px;
    line-height: 50px;
    text-align: center;
    float: left;
    color: white;
  }
  </style>

</head>

<body>

<nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between" style="padding-left:10px; padding-right:10px; max-width:1620px;">
      <a class="py-2 d-none d-md-inline-block" href="main.php" style="font-weight:bold;font-size:18px;">BINGO </a>
      <a class="py-2 d-none d-md-inline-block" href="main.php" style="font-weight:bold; vertical-align:middle;">YOU NEED TO CREATE AN ACCOUNT  FIRST </a>
  </div>
</nav>

<header class="main-header clearfix">

  <div class="row">
    <!-- For to add the logo to the page -->
    <div class="logo" style="padding-left: 10px;">
      <img src="logo.png" width="200" heigth="200">
    </div>
    <ul class="main-nav" style="padding-left: 450px; vertical-align: middle;">
      <li><a href=""> HOME </a></li>
      <li class="active"><a href=""> PRODUCTS </a></li> <!-- The active works for to know in which page are u-->
      <li><a href=""> WHO ARE WE? </a></li>
      <li><a href=""> CATEGORY </a></li>
      <li><a href=""> CONTACT </a></li>
      <li><a href=""> REGISTER </a></li>
    </ul>
  </div>
</header>

<div class="col-md-5 p-lg-5 mx-auto my-5">
     <h1 class="display-4 font-weight-bold slide-in-blurred-top" style="color: 	#484848;">Everything you are looking for is here!</h1>
     <span class="col-12 badge badge-success" style="display:none;" id="verde"></span>
</div>
<div class="product-device shadow-sm d-none d-md-block"></div>
<div class="product-device product-device-2 shadow-sm d-none d-md-block "></div>

<div class="button">
  <a href="" class="btn btn-one"> Upload product</a>
</div>

<div id="container">
  <ul>
    <li><a href=""> HOME </a></li>
    <li><a href=""> PRODUCTS </a></li>
    <li><a href=""> WHO ARE WE? </a></li>
    <li><a href=""> CATEGORY </a></li>
    <li><a href=""> CONTACT </a></li>
    <li><a href=""> REGISTER </a></li>
  </ul>
</div>




<footer class="section footer-classic context-dark bg-image" style="background: rgb(37,39,41);text-decoration:none;">
  <div class="container">
    <div class="row row-30">
      <div class="col-md-4 col-xl-5">
        <br>
          <h5 style="color:white;">Who are we?</h5>
          <br>
          <p style="color:white;">We are the best trading goods platform! Our motto is "Buy it , use it , sell it!" We belive in what we are doing an hope you will find here the perfect place to sell your items.</p>
          <!-- Rights-->
          <p class="rights white" style="color:white;"><span>©  </span><span class="copyright-year white" style="color:white;">2019-2020</span><span> </span><span>Team Brain Buddies</span><span>. </span><span></span></p>
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
          <li style="text-decoration:none;"><a href="productspage.php">PRODUCTS</a></li>
          <li style="text-decoration:none;"><a href="dropdown.php">DROPDOWN PRODUCTS</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>


  <script src="js/jquery.js"> </script>
  <script src="js/bootstrap.min.js"></script>
  <script>
  	$(document).ready(function () {
  		$("#1").click(function (event){
  			event.preventDefault();
  	var username;
  	var password;
  	var name;
    var email;
    var surname;
    var age;
    var city;

  	username= $("#username").val();
  	password= $("#password").val();
  	name= $("#name").val();
    email= $("#email").val();
    surname= $("#surname").val();
    age= $("#age").val();
    city= $("#city").val();
  	console.log(username, password, name);
  $.post("useradd.php", {username: username, password: password ,name: name, email: email, surname: surname, age: age, city: city},
  function(data){
  		$("#verde").html(data);
  		$("#verde").fadeIn('slow');
  });

  		});
  	});
  </script>

</body>

</html>
