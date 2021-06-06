<?php 
//allow config
define('__CONFIG__', true);
//required config
require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/css/uikit.min.css" />
  <script src="./assests/js/jquery-3.6.0.min.js"></script>
 <title>Pafe Title</title>
</head>
<body>
 
<div class='uk-section uk-container'>
        <?php
           echo date("Y m d"); 
        ?>
        <p>
        <a href="./login.php">Login</a>
         <a href="./register.php">Register</a>
        </p>
        
</div>
 

 <?php
    require_once "inc/footer.php"
 ?>



</body>
</html>


<!-- https://getuikit.com/docs/form -->