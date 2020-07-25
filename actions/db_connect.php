<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<style type ="text/css">
     

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("img/header2.jpg");
  background-position: center;
    background-repeat: no-repeat;
  height: 40vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}


   </style>


	<title></title>
</head>
<body>
<?php
   ob_start();
session_start();
    
  if ( isset($_SESSION['user'])!="" || isset($_SESSION['admin'])!="" || isset($_SESSION['superadmin'])!="") {
 $logoutlink= "<form class=\"form-inline m-2 my-lg-0\">
           <a href=\"".$url6."\"><button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"button\">Search</button></a>
        <a href=\"actions/logout.php?logout\"><button class=\"btn btn-outline-light m-2 my-sm-0\" type=\"button\">Logout</button></a>
    </form>";

}


else {$logoutlink="<form class=\"form-inline my-2 my-lg-0\">
      <a href=\"index.php\"><button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"button\">Login</button></a>
          </form>";


} ?>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:8vh">The Pet Adoption</h1>
    <p style="font-size:3vh">Adopt a pet will change your life and brings joy in your family</p>
  </div>
</div>

<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo $url ?>">The Pets</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $url ?>">Home<span class="sr-only"></span></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="<?php echo $url2 ?>">General<span class="sr-only"></span></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="<?php echo $url3 ?>">Senior<span class="sr-only"></span></a>
      </li>

      <?php if ( isset($_SESSION['admin'])!="" || isset($_SESSION['superadmin'])!="" ) { ?>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $url4 ?>">Add a pet</a>
      </li>
      <?php ;} else {"";} ?>

  <?php if ( isset($_SESSION['superadmin'])!="" ) { ?>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $url5 ?>">Manage users</a>
      </li>
      <?php ;} else {"";} ?>

      </ul>
        </div>
       <?php echo $logoutlink ?>
        </nav>



<?php 

// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "cr11_bruno_petadoption";

// create connection
$connect = new  mysqli($localhost, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
} else {
    
}

$footer="<footer>
<div class=\"mt-5\" style=\"height: 6vw; background-color: #1A1A1A; width: 100%; text-align: center\">
            <span style=\"color: white; font-size: 1.5vw; position: relative; top: 2vw\">
               The Pet Adoption - Bruno Mairey 2020
            </span>
        </div>
</footer>
</html>"



?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   

</body>
</html>
