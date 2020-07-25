
<?php 
$url = "../home.php";
  $url2 = "../general.php";
 $url3 = "../senior.php";
  $url4 = "../create.php";
   $url5 = "../users.php";
     $url6 = "../search.php";



require_once 'db_connect.php';

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

if ($_POST) {
   $id = $_POST['userId'];

   $sql = "DELETE FROM `users` WHERE userId = {$id}";
    if($connect->query($sql) === TRUE) {
       echo "<h4 class=\"text-success mx-5 my-3\">Successfully deleted!!</h4>" ;
       echo "<a href='../admin.php'><button type='button' class=\"btn btn-dark mx-5\">Back to the main menu</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>
<?php echo $footer; ?>