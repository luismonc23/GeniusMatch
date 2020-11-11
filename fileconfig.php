<?php
  $instance = 'dev';  // dev, prod, demo
  $app_name = 'GeniusMatch'; // Base App
  $app = 'geniusmatch'; // baseapp

  error_reporting(0);
  
//Configuration
  date_default_timezone_set('America/Mexico_City');
  setlocale(LC_TIME, 'es_MX.UTF-8');
  $db = $instance == 'prod' ? pg_connect("host=localhost port=5432 dbname=dbGeniusMatch user=postgres password=somedemopassword") : pg_connect("host=192.168.1.68 port=5432 dbname=dbGeniusMatch user=postgres password=P1o2s3t423@");

?>
