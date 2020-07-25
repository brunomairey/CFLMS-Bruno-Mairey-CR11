<?php 
 $url = "../home.php";
  $url2 = "../general.php";
 $url3 = "../senior.php";
  $url4 = "../create.php";
   $url5 = "../senior.php";
     $url6 = "../search.php";


require_once 'db_connect.php';

 ob_start();
session_start();

if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"]) && !isset($_SESSION["superadmin"])){
  header("Location: index.php");
}elseif(isset($_SESSION["user"])){
  header("Location: home.php");
  // header("Refresh: 5; url= admin.php")
}



// I have to add addslashes because there is 
if ($_POST) {
   $name = addslashes($_POST["name"]);
      $age = $_POST['age'];
    $type = $_POST['type'];
    $description = addslashes($_POST["description"]);
     $hobbies = $_POST['hobbies'];
     $address = $_POST['address']; 
      $zip_code = $_POST['zip_code']; 
       $city = $_POST['city']; 
        $img = $_POST['img'];

  
  $sql = "INSERT INTO `pets` (`name`, `age`, `type`, `description`, `hobbies`, `address`, `zip_code`, `city`, `img`) 
  VALUES ('$name', '$age', '$type', '$description', '$hobbies', '$address', '$zip_code', '$city', '$img')";
    if($connect->query($sql) === TRUE) {
       echo "<p class=\"text-success mx-5 my-3\">New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button' class=\"btn btn-dark mx-5\">Enter a new pet</button></a>";
        echo "<a href='../admin.php'><button type='button' class=\"btn btn-dark\">Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
<?php echo $footer; ?>