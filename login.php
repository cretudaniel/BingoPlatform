<?php
//This code is used for seeing if you are loged in , if you are you are redirected
// to the main.php. If not you need to login or create an account.

include 'connection.php';

session_start();

if (isset($_SESSION['username'])) {
    header("Location: main.php");
}

$error = 1;

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $bsdiper='1';
    $query = mysqli_query($db, "SELECT id FROM user WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query)) {
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
      <a class="py-2 d-none d-md-inline-block" href="main.php" style="font-weight:bold;font-size:18px;">BINGO </a>
      <a class="py-2 d-none d-md-inline-block" href="main.php" style="font-weight:bold; vertical-align:middle;">YOU NEED TO LOGIN FIRST </a>
    </div>
  </nav>

  <!-- THE END OF THE HEADER -->

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

      <br>
      <div class="col-8 offset-2 jumbotron"
       style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);">
       <h1 class="display-4 font-weight-bold slide-in-blurred-top" style="color: 	#484848;">BINGO</h1>
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
                    <li><a href="#">CATEGORY</a></li>
                    <li><a href="#">REGISTER</a></li>
                    <li><a href="contact.php">CONTACT</a></li>

                  </ul>
                </div>
              </div>
            </div>

          </footer>
          <!-- THE END OF THE FOOTER -->

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
