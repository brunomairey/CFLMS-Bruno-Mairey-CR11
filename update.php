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

if (isset($_GET['id'])) {
   $id = $_GET['id'];

    $sql = "SELECT * FROM `pets` WHERE id = {$id}" ;
   $result = $connect->query($sql);
   
   $data = $result->fetch_assoc();

   $connect->close();
// echo $data;

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit Pet</title>

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
<form class="mx-5" action="actions/a_update.php" method= "post">
  

  
    <div class="form-group col-md-12">
      <label for="name">Name of the animal</label>
      <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>">
    </div>
    <div class="form-group col-md-12 text-center"><b>Location of the animal:</b></div>
<div class="form-group col-md-12">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>">
</div>

  <div class="form-row col-md-12">
    <div class="form-group col-md-5 mr-5">
      <label for="zip_code">Zipcode</label>
      <input type="number" class="form-control" name="zip_code" value="<?php echo $data['zip_code'] ?>" step="1">
    </div>
    <div class="form-group col-md-5 ml-5">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" value="<?php echo $data['city'] ?>">
    </div>
  </div>
<div class="form-row col-md-12">
      <div class="form-group col-md-5 mr-5">
      <label for="age">Age of the animal</label>
      <input type="number" class="form-control" name="age" value="<?php echo $data['age'] ?>" step="1">
      </div>

     <div class="form-group col-md-5 ml-5">
     <label for="type">Type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="type">
       <option hidden><?php echo $data['type'] ?></option>
      <option>small</option>
      <option>large</option>
      <option>senior</option>
    </select>
  </div>
</div>

<div class="form-group col-md-12">
    <label for="description">Description of the animal</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"> <?php echo $data['description'] ?></textarea>
</div>

 <div class="form-group col-md-12">
    <label for="hobbies">Hobbies of the animal</label>
    <input type="text" class="form-control" name="hobbies" value="<?php echo $data['hobbies'] ?>">
</div>

 



    <div class="form-group col-md-12">
    <label for="img">Image link</label>
    <input type="text" class="form-control" name="img" value="<?php echo $data['img'] ?>">
    </div>
  <!--   please let this code - it is to import an image from file server
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div> -->
   <div class="col-md-6">
     <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
  <button type="submit" class="btn btn-dark mr-5">Edit Pet</button>
   <a class="btn btn-dark" href="admin.php" type="button" role="button">
    Back to main Page
  </a>
</div>
</form>

</div>



</body>
<?php
} else{ echo"there is no id";}
?>
<?php echo $footer; ?>
</html>

