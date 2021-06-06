 <?php 
 // if there is no constans defined called __comgif__, do not load this file
  if(!defined('__CONFIG__')){
   exit("You do not a config file" );
  }
  // our config is below

  //Include the DB.php file;
  include_once "classes/DB.php";

  $con = DB::getConnection();
  
 ?> 

