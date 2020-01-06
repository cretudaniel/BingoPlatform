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
 <?php
 $idoftheuseryouwanttoview=$_GET["id"];
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
   <style>
   button.link { background:none;border:none; color: white;}
   </style>
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

   <?php
   $result = mysqli_query($db,"SELECT * FROM user WHERE username='$username' ");
   while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
     $admintest=$row['usercategory'];
   };

  $result = mysqli_query($db,"SELECT * FROM user WHERE id = '$idoftheuseryouwanttoview' ");

  while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
      // USERNAME IS ALREADY SAVED
      $username=$row['username'];
      $id = $row['id'];
      $name = $row['name'];
      $surname = $row['surname'];
      $age = $row['age'];
      $mail = $row['mail'];
      $city = $row['city'];
      $photo = $row['photo'];
      $company = $row['company'];
      $usercat = $row['usercategory'];
      $usercat2 = $row['usercategory'];
      $phone = $row['phone'];

    //  if ($username = 'danielsale') {
      //  echo "1";
  //    }
};
?>
<?php
$i=0;
$notaf=0;
$result2 = mysqli_query($db,"SELECT * FROM reviews WHERE userwhoget = '$username' ");

while($row = mysqli_fetch_array($result2, MYSQLI_BOTH)){
   // USERNAME IS ALREADY SAVED
   $i++;
   $nota = $row['nota'];
   $notaf = $nota + $notaf;

 //  if ($username = 'danielsale') {
   //  echo "1";
//    }
};
if($i>0){
$notaf = $notaf/$i;
}
else {
  $notaf = 10;
}
?>

   <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <!--  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/> -->
                        <?php
                          echo "<img src=imagini/".$photo."  style=\"border-radius:1rem;\">"
                            ?>
                            <form action="adauga-imagine.php" method="POST">

                          <!--  <button id="1" class="btn btn-success">Press to Change</button> -->
                        </div>
                    </div>
                    </form>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo"$surname $name";?>
                                    </h5>
                                    <h6>
                                        <?php echo"$company";?>
                                    </h6>
                                    <p class="proile-rating">RATINGS : <span><?php echo"$notaf"; ?>/10</span></p>
                                    <p class="proile-rating">NUMBER OF REVIEWS : <span><?php echo"$i"; ?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About him</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Items he sell</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="profile" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                      <?php if ($admintest=="1"){
                        echo"<span class=\"badge badge-pill badge-primary\">";
                        echo "<button class=\"link\" onclick=\"window.location.href = 'banuser.php?id=".$idoftheuseryouwanttoview."';\">BAN USER</button>";
                        echo"</span>";
                      } ?>
                      <?php if ($usercat=="1") {
                        echo"<span class=\"badge badge-pill badge-primary\">";
                        echo "ADMINISTRATOR";
                        echo"</span>";
                      }
                      elseif ($usercat=="0") {
                        echo"<span class=\"badge badge-pill badge-secondary\">";
                        echo" NORMAL USER ";
                        echo"</span>";
                      }
                      elseif ($usercat=="2") {
                        echo"<span class=\"badge badge-pill badge-success\">";
                        echo"PREMIUM USER";
                        echo"</span>";
                      }?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">


                            <p>Things you can do</p>
                            <a href="">Review him</a><br/>
                            <a href="">Report him</a><br/>
                            <a href="">Block him</a><br/>
                            <a href="">Message him</a><br/>
                            <a href="">Call him</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>YOU ARE</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php if ($usercat2=="1") {
                                                  echo "ADMINISTRATOR";
                                                }
                                                elseif ($usercat2=="0") {
                                                  echo"NORMAL USER";
                                                }
                                                elseif ($usercat2=="2") {
                                                  echo"PREMIUM USER";
                                                }?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo"$id";?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo"$surname $name";?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo"$mail";?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "$phone";?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Company</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "$company"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "$city";?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "$username";?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

<!-- ITEMS YOU SELL -->
                            <div class="row">
                              <?php


                             $result2 = mysqli_query($db,"SELECT * FROM items WHERE user_name = '$username' ");

                             while($row = mysqli_fetch_array($result2, MYSQLI_BOTH)){
                                 // USERNAME IS ALREADY SAVED

                                 $name = $row['name'];
                                 $photo = $row['photo'];
                                 $age = $row['year'];
                                 $price = $row['price'];
                                 $id = $row['id'];

                            echo "<div class=\"col-md-4\">
                              <figure class=\"card card-product\">
                                <div class=\"img-wrap\">
                                  <img src=\"imagini/".$photo."\" style=\"min-height=100%;\">
                                  <a class=\"btn-overlay\" href=\"#\"><i class=\"fa fa-search-plus\"></i> Quick view</a>
                                </div>
                                <figcaption class=\"info-wrap\">
                                  <h6 class=\"title text-dots\" style=\"text-overflow: ellipsis; overflow: hidden; white-space: nowrap;\"><a href=\"#\">".$name."</a></h6>
                                  <div class=\"action-wrap\">
                                    <a href=\"#\" class=\"btn btn-primary btn-sm float-right\"> Order </a>
                                    <div class=\"price-wrap h5\">
                                      <span class=\"price-new\">$".$price."</span>
                                    </div> <!-- price-wrap.// -->
                                  </div> <!-- action-wrap -->
                                </figcaption>
                              </figure> <!-- card // -->
                            </div> <!-- col // -->";
                           };
                           ?>
                            </div> <!-- row.// -->

                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>USERS</label>
                                            </div>
                                            <div class="col-md-6">
                                                <label>REVIEWS</label>
                                            </div>
                                        </div>
                                        <?php
                                        $result2 = mysqli_query($db,"SELECT * FROM reviews WHERE userwhoget = '$username' ");
                                        while($row = mysqli_fetch_array($result2, MYSQLI_BOTH)){
                                           // USERNAME IS ALREADY SAVED
                                           $userwhogive = $row['userwhogive'];
                                           $review = $row['review'];
                                           echo "<div class=\"row\">
                                               <div class=\"col-sm-4\">
                                                   <p>".$userwhogive."</p>
                                               </div>
                                               <div class=\"col-sm-6\">
                                                   <p>".$review."</p>
                                               </div>

                                           </div>";
                                        };
                                        ?>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
      var imagine_user;
      imagine_user= $("#imagine")[0].files[0];
      var formular = new FormData();
      formular.append("imagine", imagine_user);
      $.ajax({
  url: "adauga-imagine.php",
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
   <script>
   $(document).ready(function(){
      $(".link").click(function(event){
        event.preventDefault();
        console.log("6");
      });
   });
   </script>

 </body>

 </html>
