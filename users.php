<?php 

    $url = "admin.php";
  $url2 = "general.php";
 $url3 = "senior.php";
  $url4 = "create.php";
   $url5 = "users.php";
  $url6 = "search.php";



include 'actions/db_connect.php';

 ob_start();
session_start();

if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"]) && !isset($_SESSION["superadmin"])){
  header("Location: index.php");

}
elseif(isset($_SESSION["user"])){
  header("Location: home.php");
  // header("Refresh: 5; url= admin.php")
}

elseif(isset($_SESSION["admin"])){
  header("Location: admin.php");
  // header("Refresh: 5; url= admin.php")
}


 ?>

<!DOCTYPE html>
<html>
<head>
  

   <title>The User Management</title>

   
</head>
<body>





  <table class="table table-striped" style="position: relative; left: 10vw; width:80vw">
  <thead>
    <tr>
      <th scope="col">UserId</th>
      <th scope="col">UserName</th>
      <th scope="col">UserLastname</th>
      <th scope="col">UserEmail</th>
        <th scope="col">Status</th>
          <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
   

<?php
           $sql = "SELECT * FROM users";
           $result = $connect->query($sql);

if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {


                   ?>


<tr>
      <th scope="row"><?= $row['userId'] ?></th>
      <td><?= $row['userName'] ?></td>
      <td><?= $row['UserLastname'] ?></td>
      <td><?= $row['userEmail'] ?></td>
      <td><?= $row['status'] ?></td>
<td> <a href="deleteusers.php?userId=<?= $row['userId']?>"><button  class="btn btn-outline-dark btn-lg mx-3" type='button'>Delete</button></a></td>

    </tr>

       <?php ;
               }
           } else  {
               echo  "No result";
           } 

           ?>


</tbody>
</table>

<?php echo $footer; ?>
</body>


