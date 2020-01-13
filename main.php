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
  <link href="css2.css?version=5" rel="stylesheet">
</head>

<body style="overflow:hidden;">
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


  <!-- THE MAIN ANNOUCEMENT ABOUT THE APP WITH A CREATE ACCOUNT BUTTON-->

<!-- <div class="position-relative overflow-visible p-6 p-md-5 m-md-0 text-center bg-light">
  <div class="col-md-5 p-lg-3 mx-auto my-3 ">
       <h1 class="display-3 font-weight-bold slide-in-blurred-top "style="color: #008bff;text-shadow: 2px 2px 4px #ffffff;">BINGO</h1>
       <p class="lead font-weight-normal slide-in-blurred-top">Best platform for selling your goods in a modern way.</p>
       <a class="btn btn-outline-info" href="login.php">Go shopping!</a>
     </div>
   </div> -->
<div class="firstthing">
  <h1>Bingo</h1>
  <h2>The best way to exchange your old stuff</h2>
  <form class="firstform">
    <div class="form-left">
    <label> Just go to the page and find items that are listed on sale</label>
    <p>
      The easiest way to search for the desired product!
    </p>
  </div>
    <input type="button" value="Search Now" id="cta-btn" onclick="window.location.href='category.php'">
  </form>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="space">
  </div>
  <div class="space">
  </div>
  <div class="space">
  </div>
</div>


   <!-- THE END OF THE MAiN ANNOUCEMENT -->
   <!--
    <div class="position-relative overflow-hidden p-0 p-md-0 m-md-0 text-center bg-light">

          <img src="images/png4.png">

        </div>
      -->


<div>
      </section>
<!-- TEST FOR THE ID DELETE VIEWER ETC -->
      <?php
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

      <footer id="sticky-footer" class="py-3  border-top border-info-2 shadow-sm text-white marginbot0" style="bottom:0px; width:100%; background-color: /*#e5e5e5*/ #262626 ;">
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
  <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <!-- <script>
   $(document).ready(function(){
     $(".deletebutton").click(function(event){
       var userid=$(this).data('id');
       $.post("restoftheusers.php",{id2: userid});
       console.log(userid);
     });
   });
   </script> -->

</body>
</html>
