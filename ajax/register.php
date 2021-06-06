<?php 
//allow config
define('__CONFIG__', true);
//required config
require_once "../inc/config.php";


if($_SERVER['REQUEST_METHOD'] === 'POST') {
 header('Content-Type: application/json');
 $return  = [];

 // Make sure the user does not exist

 // Make shure the user CAN be added AND is added

 // Return the popper information back to JS to register us.

 $return['redirect'] = 'dashboard.php';
 $return['name'] = "Serhii";
 
 echo json_encode($return, JSON_PRETTY_PRINT); exit;
}else{
 exit('test');
}



?>