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

</head>

<body>
 <!-- diper -->
  <!-- Here is the header , sticky one-->

<nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between" style="padding-left:10px; padding-right:10px; max-width:1620px;">
      <a class="py-2 d-none d-md-inline-block" href="main.php" style="font-weight:bold;font-size:18px;">BINGO </a>
      <a class="py-2 d-none d-md-inline-block" href="#" style="font-weight:bold; vertical-align:middle;">YOU NEED TO CREATE AN ACCOUNT  FIRST </a>
    </div>
  </nav>

  <!-- THE END OF THE HEADER -->
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">

  <div class="col-8 offset-2 jumbotron"
   style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6); padding-top:15px;">

    <h1 class="display-4 font-weight-bold slide-in-blurred-top" style="color: 	#484848;">BINGO</h1>
    <span class="col-12 badge badge-success" style="display:none;" id="verde"></span>
    <br>
      <form action="useradd.php" method="POST">

      <p class="user">
  <input type="text" placeholder="USERNAME" name="username" class="form-control" id="username"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
  </br>
  <input type="password" placeholder="PASSWORD" name="password" class="form-control" id="password"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
  </br>
  <input type="text" placeholder="EMAIL" name="email" class="form-control" id="email"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
<br />
  <input type="text" placeholder="NAME" name="name" class="form-control" id="name"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
<br />
  <input type="text" placeholder="SURNAME" name="surname" class="form-control" id="surname"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
<br />
  <input type="text" placeholder="AGE" name="age" class="form-control" id="age"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
<br />
  <input type="text" placeholder="CITY" name="city" class="form-control" id="city"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
<br />

</p>
    <button class="btn btn-success" id="1"
    style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
     Create this account</button>
    <a href="login.php">
    <input type="button" value="I have an account" class="btn btn-info" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);"></a>
          </form>
      </div>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block "></div>
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
