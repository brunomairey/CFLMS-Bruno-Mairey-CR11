
<?php 

    $url = "admin.php";
  $url2 = "general.php";
 $url3 = "senior.php";
  $url4 = "create.php";
   $url5 = "senior.php";
     $url6 = "search.html";
  include 'actions/db_connect.php'; 


 ob_start();
session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"]) && !isset($_SESSION["superadmin"])){
  header("Location: index.php");
}elseif(isset($_SESSION["user"])){
  header("Location: home.php");
  // header("Refresh: 5; url= admin.php")
}

 ?>
<!DOCTYPE html>

<html>
<head>
   <title>Add Media</title>

   <style type= "text/css">

    #contactForm {
    margin: 2vw; 
    padding: 2vw; 
    background-color: #f5f5f5 ;
    border-radius: 10px; 
    box-shadow: 5px 10px 18px #888888; 
    width: 60vw;
    position: relative;
    left: 20vw;
  }
      </style>

</head>
<body>
  <div id="contactForm">
<form class="mx-5" action="actions/a_create.php" method= "post">
  

  
    <div class="form-group col-md-12">
      <label for="name">Name of the animal</label>
      <input type="text" class="form-control" name="name" placeholder="Dog">
    </div>
    <div class="form-group col-md-12 text-center"><b>Location of the animal:</b></div>
<div class="form-group col-md-12">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Kettenbrugenkasse 125">
</div>

  <div class="form-row col-md-12">
    <div class="form-group col-md-5 mr-5">
      <label for="zip_code">Zipcode</label>
      <input type="number" class="form-control" name="zip_code" placeholder="1030" step="1">
    </div>
    <div class="form-group col-md-5 ml-5">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" placeholder="Vienna">
    </div>
  </div>
<div class="form-row col-md-12">
      <div class="form-group col-md-5 mr-5">
      <label for="age">Age of the animal</label>
      <input type="number" class="form-control" name="age" placeholder="1" step="1">
      </div>

     <div class="form-group col-md-5 ml-5">
     <label for="type">Type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="type">
      <option selected>small</option>
      <option>large</option>
      <option>senior</option>
    </select>
  </div>
</div>

<div class="form-group col-md-12">
    <label for="description">Description of the animal</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>

 <div class="form-group col-md-12">
    <label for="hobbies">Hobbies of the animal</label>
    <input type="text" class="form-control" name="hobbies" placeholder="Hobbies">
</div>

 



    <div class="form-group col-md-12">
    <label for="img">Image link</label>
    <input type="text" class="form-control" name="img" placeholder="Insert Image link">
    </div>
  <!--   please let this code - it is to import an image from file server
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div> -->
  <div class="col-md-12">
  <button type="submit" class="btn btn-dark btn-lg mx-5">Insert Pet</button>
   <a class="btn btn-dark btn-lg" href="admin.php" type="button" role="button">
    Back to main Page
  </a>
</div>
</form>
</div>
<?php $connect->close(); ?>
</body>
<?php echo $footer; ?>
</html>