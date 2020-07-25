<?php 

    $url = "admin.php";
  $url2 = "general.php";
 $url3 = "senior.php";
  $url4 = "create.php";
   $url5 = "users.php";
    $url6 = "search.php";
require_once 'actions/db_connect.php';

 ob_start();
session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"]) && !isset($_SESSION["superadmin"])){
  header("Location: index.php");
}elseif(isset($_SESSION["user"])){
  header("Location: home.php");
  // header("Refresh: 5; url= admin.php")
}

elseif(isset($_SESSION["admin"])){
  header("Location: admin.php");
  // header("Refresh: 5; url= admin.php")
}

if ($_GET['userId']) {
   $id = $_GET['userId'];

   $sql = "SELECT * FROM `users` WHERE userId = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete pet</title>
</head>
<body>

<h3 class="text-warning m-5">Do you really want to delete this user?</h3>
<form action ="actions/a_deleteusers.php" method="post">

   <input type="hidden" name= "userId" value="<?php echo $data['userId'] ?>">
   <button type="submit" class="btn btn-dark mx-5">Yes, delete it!</button>
   <a href="users.php"><button type="button" class="btn btn-dark">No, go back!</button></a>
</form>

</body>
<?php
}

else {
  echo "there is an issue somewhere: call your webmaster";
}
?>
<?php echo $footer; ?>
</html>

