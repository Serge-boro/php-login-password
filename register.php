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
  <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>

   <form class="uk-form-stacked js-register">

   <h2>Register</h2>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacke-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacke-text" type="email" required="required" placeholder="email@email.com">
        </div>
    </div>

       <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="your password..." >
        </div>
    </div>

    <div class="uk-margin uk-alert-danger js-error" style='display: none'></div>

    <div class="uk-margin">
        <button class="uk-button uk-button-default" type="submit">Register</button>
    </div>
</form>
  </div>
</div>
 

 <?php
    require_once "inc/footer.php"
 ?>



</body>
</html>


<!-- https://getuikit.com/docs/form -->