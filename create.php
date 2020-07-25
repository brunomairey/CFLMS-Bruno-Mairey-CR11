
<?php 

    $url = "admin.php";
  $url2 = "general.php";
 $url3 = "senior.php";
  $url4 = "create.php";
   $url5 = "senior.php";
     $url6 = "search.php";
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



<script>

function validateage() {
  var x = document.forms["create"]["age"].value;
  var y = document.forms["create"]["type"].value;
  console.log(x);
  console.log(y);
  if ((x>8) && (y !='senior')) {
    document.getElementById("errorage").innerHTML= "a animal older than 8 years old should be a senior animal: please correct your selection";
    return false;
  }
if ((x<=8) && (y =='senior')) {
    document.getElementById("errorage").innerHTML= "a animal younger than 8 years old should be a large or a small animal: please correct your selection";
    return false;
  }



}
</script>

  <div id="contactForm">

<form name="create" class="mx-5" action="actions/a_create.php" onsubmit="return validateage()" method= "post">
  

  
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
      <input type="number" class="form-control" name="zip_code" placeholder="1030" step="1" min="1000" max="99999">
    </div>
    <div class="form-group col-md-5 ml-5">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" placeholder="Vienna">
    </div>
  </div>
<div class="form-row col-md-12">
      <div class="form-group col-md-5 mr-5">
      <label for="age">Age of the animal</label>
      <input type="number" class="form-control" name="age" placeholder="1" step="1" min="1" max="95">
      </div>

     <div class="form-group col-md-5 ml-5">
     <label for="type">Type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="type">
      <option value="small" selected>small</option>
      <option value="large">large</option>
      <option value="senior">senior</option>
    </select>
  </div>
  <span  class="text-danger" id="errorage"></span>
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

  <div class="col-md-12">
  <button class="btn btn-dark btn-lg mx-5" type="submit">Insert Pet</button>
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