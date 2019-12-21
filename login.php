<?php
//This code is used for seeing if you are loged in , if you are you are redirected
// to the main.php. If not you need to login or create an account.

include 'connection.php';

session_start();

if (isset($_SESSION['username'])) {
    header("Location: main.php");
}else {
  $val_check=1;
}

$error = 1;

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $bsdiper='1';
    $result = mysqli_query($db,"SELECT * FROM banlist WHERE username='$username' ");
    while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
      $error=2;
      header("Location: signin.php");
    };
    $query = mysqli_query($db, "SELECT id FROM user WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query)) {
      if($error=="2"){
        header("Location: signin.php");
      }
        $error = 0;
        $_SESSION['username'] = $username;
        while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {
            $_SESSION['id'] = $row['id'];
        }
        header("Location: main.php");
    }

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Bingo</title>
  <meta name="description" content="Bingo - Online selling platform ">
  <meta name="Bingo" content="selling and buying">
  <!-- Bootstrap link -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" rel='stylesheet'>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Extra CSS that i need -->
  <link href="css/maincss.css" rel="stylesheet">
  <link href="css/animations.css" rel="stylesheet">
  <!-- The awesome font icon pack -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <!-- Here is the header , sticky one-->
<!-- OLD HEADER
<nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between" style="padding-left:10px; padding-right:10px; max-width:1620px;">
      <a class="py-2 d-none d-md-inline-block" href="main.php" style="font-weight:bold;font-size:18px;">BINGO </a>
      <a class="py-2 d-none d-md-inline-block" href="main.php" style="font-weight:bold; vertical-align:middle;">YOU NEED TO LOGIN FIRST </a>
    </div>
  </nav>
-->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm sticky-top" style="padding-left:10px; padding-right:10px;">

    <h5 class="my-0 mr-md-auto font-weight-bold" > <a class="p-3" href="main.php" style="text-decoration:none;">BINGO</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-3 text-dark" href="contact.php">Contact</a>
    <a class="p-3 text-dark" href="#">Language</a>
  </nav>

    <?php
    if($val_check="0"){
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

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-0 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

      <br>
      <div class="col-8 offset-2 jumbotron"
       style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
       <h1 class="display-3 font-weight-bold slide-in-blurred-top "style="color: #008bff;text-shadow: 2px 2px 4px #ffffff;">BINGO</h1>
       <br>
        <?php
if (isset($_POST['submit']) && $error == 1) {
    echo "<h1 class='badge badge-danger text-center'>Username or the password are incorect</h1>";
}
?>
            <form action="login.php" method="POST">
                <input type="text" class="form-control" name="username" placeholder="USERNAME">
                <br/>
                <input type="password" class="form-control" name="password" placeholder="PASSWORD">
                <br/>
                <input type="submit" class="btn btn-info" value="Login" name="submit" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6); float: left;">
                <a href="signin.php">
                <input type="button" value="Signin" class="btn btn-warning" style="float: right; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);"></a>
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
          <!-- THE END OF THE FOOTER -->

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
