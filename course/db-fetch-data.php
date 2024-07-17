<?php
  $connection_to_db = mysqli_connect("localhost", "root", "", "student");

  if(!$connection_to_db){
    die("CONNECTIION ERROR");
  }


?>