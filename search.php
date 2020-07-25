<?php 

  $url = "home.php";
  $url2 = "general.php";
 $url3 = "senior.php";
  $url4 = "create.php";
   $url5 = "senior.php";
   $url6 = "search.php";



include 'actions/db_connect.php'; 
 ob_start();
session_start();

  if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"]) && !isset($_SESSION["superadmin"]) ){
  header("Location: index.php");

  // header("Refresh: 5; url= admin.php")
}
?>







<!DOCTYPE html>
<html>
<head>
  <title>Scherlock Holmes</title>
  <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

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


<body>



 <div id="contactForm">
<form class="mx-5">
  

  
    <div class="form-group col-md-12">
          <label>Search an element in the databese</label><br>
    <input type="text" name="search" id="search" class="form-control">
    
    </div>
 


  </form> 

   <p id="result2"></p>

</div>

  <script>


var request2;

$("#search").keyup(function(event){

   // Prevent default posting of form - put here to work in case of errors
   event.preventDefault();

   // Abort any pending request
   if (request2) {
       request2.abort();
   }
   // setup some local variables
   var $form = $(this);

   // Let's select and cache all the fields
   var $inputs = $form.find("input, select, button, textarea");

   // Serialize the data in the form
   var serializedData = $form.serialize();

   // console.log(serializedData);
   var search = document.getElementById("search").value;
   if(search.length > 0){
    $inputs.prop("disabled", true);

   // Fire off the request to /form.php
   request2 = $.ajax({
       url: "actions/search2.php",
       type: "post",
       data: serializedData
   });

   // Callback handler that will be called on success
   request2.done(function (response, textStatus, jqXHR){
       // Log a message to the console
       document.getElementById("result2").innerHTML= response;
       // console.log(response);
   });

   // Callback handler that will be called on failure
   request2.fail(function (jqXHR, textStatus, errorThrown){
       // Log the error to the console
       console.error(
           "The following error occurred: "+
           textStatus, errorThrown
       );
   });

   // Callback handler that will be called regardless
   // if the request failed or succeeded
   request2.always(function () {
       // Reenable the inputs
       $inputs.prop("disabled", false);
   });
 }else {
  document.getElementById("result2").innerHTML = "";
 }

   
});


</script>
</body>
</html>

<?php ob_end_flush(); ?>
<?php echo $footer; ?>