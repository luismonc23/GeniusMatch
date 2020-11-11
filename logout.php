<?php/*=====================================================
Login Script - Luis Moncada
Last Modified: May 7 20
=====================================================*/
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

   //Configuration
   require_once('fileconfig.php');

   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   // echo 'You have cleaned session';
   // header('Refresh: 2; URL = login.php');

?>
