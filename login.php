<!DOCTYPE html>
<html>
  <head>
    <body  onload="onload()">
    <title>Please login</title>
    <link rel="stylesheet" href="css/style.css" />
   
  </head>
  <body>
    <div class="bg"></div>
    <script src="js/bg.js"></script>
    <div style="color: white;">
      <?php
$name = $_COOKIE['userName'];


//if ($name) {
  //echo "<script>window.location.href = '/';</script>"; }
?>
  <a href="/">Login here</a>
    </div>
  <script>
var nam
    function onload() {
      nam = prompt("Enter username.")
      if(nam.length > 20){
          alert('Your name is too long! ')
           window.location.href = '/login.php';
        } else {
    document.cookie = "userName=" + nam;
    window.location.href = '/';
      }
    }
  </script>
  </body> 
</html>