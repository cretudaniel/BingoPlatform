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
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
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
   <link href="css/user.css" rel="stylesheet">
   <!-- The awesome font icon pack -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
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
<br> <br>
 <?php
// $value = $_GET["name"];
// echo $value;
?>
<div class="container"
  <div class="col-12 jumbotron">
<h1 class="text-center " >ADAUGARE PRODUS</h1>
<?php
?>
		<span class="col-12 badge badge-success" style="display:none;" id="verde"></span>
		<br />
<form action="adauga.php" method="POST">
		Name: <input type="text" class="form-control" id="nume" name="nume"
    style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);"> <br />
		Price: <input type="text" class="form-control" id="pret" name="pret"
    style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);"> <br />
		Category:
		<select class="form-control" id="categorie" name="categorie"
    style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">

			<option>cars</option>
			<option>bikes</option>
			<option>scooters</option>
			<option>busses</option>
      <option>trucks</option>
			<option>smarttv</option>
			<option>phones</option>
			<option>watches</option>
      <option>pc</option>
      <option>laptops</option>
      <option>house for sale</option>
      <option>house for rent</option>
      <option>lands</option>
      <option>cats</option>
      <option>dogs</option>
      <option>fishs</option>
      <option>birds</option>
      <option>clothes for him</option>
      <option>clothes for her</option>
      <option>clothes for kids</option>

			<!-- <option>Consumabile</option>
			<option>Gradina</option> -->
		</select>
    <br />
    Location : <input type="text" id="locatie"name="locatie" class="form-control" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);"/>
    <br />
    Phone Number : <input type="text" id="phone"name="phone" class="form-control" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);"/>
    <br />
     Photo : <input type="file" id="imagine" name="imagine" class="btn-secondary" />
 		<br /><br /><br />
		<button class="btn btn-success" id="1"
    style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
    List the product</button>
    <a href="productlist.php" class="btn btn-success" style="float:right;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
      Product list //NOT IN USE
  </a>
  </form>
  </div>
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
<script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/jquery-3.4.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
	$(document).ready(function () {
		$("#1").click(function (event){
			event.preventDefault();
	var numeProdus;
	var pretProdus;
	var categorieProdus;
  var locatieProdus;
  var imagineProdus;
  var phone
	numeProdus= $("#nume").val();
	pretProdus= $("#pret").val();
	categorieProdus= $("#categorie").val();
  locatieProdus= $("#locatie").val();
  phoneProdus= $("#phone").val();
  imagineProdus= $("#imagine")[0].files[0];

var formular = new FormData();
formular.append("nume", numeProdus);
formular.append("pret", pretProdus);
formular.append("categorie", categorieProdus);
formular.append("locatie", locatieProdus);
formular.append("imagine", imagineProdus);
formular.append("phone", phoneProdus);


$.ajax({
  url: "adaugaprodus.php",
  method:"POST",
  data: formular,
  processData: false,
  contentType:false,
  success: function(data){
    $("verde").html(data);
    $("verde").fadeIn('slow');
  },
});
});
	});
</script>
</body>

</html>
