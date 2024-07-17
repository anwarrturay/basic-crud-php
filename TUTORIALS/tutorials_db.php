<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpwd = "";
  $dbname = "TUTORIALS";

  $connection = new mysqli($dbhost,$dbuser,$dbpwd,$dbname);
  if(!$connection)
    die("CONNECTION FAILED");

?>
