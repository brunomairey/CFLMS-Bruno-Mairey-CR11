<?php 

  $url = "home.php";
  $url2 = "general.php";
 $url3 = "senior.php";
  $url4 = "create.php";
   $url5 = "senior.php";
     $url6 = "../search.php";




include 'actions/db_connect.php'; 
 ob_start();
session_start();

if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"])&& !isset($_SESSION["superadmin"])){
  header("Location: index.php");
}


?>

<!DOCTYPE html>
<html>
<head>
  

   <title>The Library</title>

   
</head>
<body>



<div class="row row-cols-3 my-5 mx-2 justify-content-around">
	

<?php
      $sql = "SELECT * FROM pets WHERE `type` ='large' or `type`='small'" ;
 
      $result = $connect->query($sql);
           
if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {


                   ?>

                 
      	<div class="card border-dark mx-1 mb-4" style="max-width: 30vw;">
      		 
      		 	 <div class="card h-100 text-white bg-secondary">
      		 	 	    <div class="card-header bg-dark align-middle">
							     <h5><b><?= $row['type'] ?>
        					<span class="text-right" style="float: right">Age: <?= $row['age'] ?></span></b></h5>
        					</div>
      
            				<img src="<?= $row['img'] ?>" class="card-img-top">
      				

        					<div class="card-body">
            					<b><h4 class="card-title"><?= $row['name'] ?></h4></b>
                      
            					<h6 class="card-text">
       								<p><?= $row['description'] ?></p>
                      <p><?= $row['hobbies'] ?></p>
                      </h6>
            					

                              <table style= "width: 90%">
                                        <tr><th colspan="2"><h6> Where the animal is located ?  </h6></th></tr>
                                        <tr><td> Address: </td><td> <?= $row['address'] ?></td></tr>
                                        <tr><td> Zip Code:</td><td><?= $row['zip_code']?> </td></tr>
                                        <tr><td> City:</td><td><?= $row['city'] ?></td></tr>
                                         </table>


        					</div>
        				
        			</div>
        		</div>
       

	



                   <?php ;
               }
           } else  {
               echo  "No result";
           } 

           ?>


</div>

<?php echo $footer; ?>
</body>


