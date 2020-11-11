<?php
/*=====================================================
Login Script - Luis Moncada
Last Modified: May 7 20
=====================================================*/
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

   require_once('fileconfig.php');


   @session_start();
   setcookie("Logged", 'test', time()+360000);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user']) && isset($_POST['password']))
{
  $sql = "SELECT * FROM tblusers where user = ".pg_escape_string($db, $_POST['user'])." AND password = ".pg_escape_string($db, $_POST['password'])." AND active = true";
  $userresult = pg_send_query($db, $sql);
  $res1 = pg_get_result($db);
  $error = pg_result_error($res1);


  if ($data = pg_fetch_assoc($res1))
  {
          $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
          $_SESSION['data'] = $data;
          setcookie("Logged", $_POST['user'], time()+360000);

           $app_userdata = array(
             "success" => true,
               "login" => true,
               "data" => $data
           );
           echo json_encode($app_userdata);
           return;

   } else {
      $msg = 'Wrong username or password';

      $app_userdata = array(
          "login" => false,
          "message" => $msg,
      );
      echo json_encode($app_userdata);
      return;
   }
 } else if(false//$_SESSION['valid']
){
   $app_userdata = array(
     "success" => true,
       "login" => true,
       "data" => $_SESSION['data']
   );
   echo json_encode($app_userdata);
   return;
 } else if(
   false//true
 ){
   $sql = "SELECT * FROM tblusers where user = ".pg_escape_string($db, $_POST['user'])."";
   $userresult = pg_send_query($db, $sql);
   $res1 = pg_get_result($db);
   $error = pg_result_error($res1);


   if ($data = pg_fetch_assoc($res1))
   {
               $_SESSION['valid'] = true;
               $_SESSION['timeout'] = time();
               $_SESSION['data'] = $data;

                $app_userdata = array(
                  "success" => true,
                    "login" => true,
                    "data" => $data
                );
                echo json_encode($app_userdata);
                return;

    } else {
      $app_userdata = array(
        "success" => true,
          "login" => true,
          //"data" => $data
      );
      echo json_encode($app_userdata);
      return;
    }
 } else {
    $msg = 'Not authorized';

    $app_userdata = array(
        "login" => false,
        "message" => $msg,
    );
    echo json_encode($app_userdata);
    return;
 }

?>
