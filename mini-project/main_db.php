<?php

  $dbConn = new mysqli("localhost", "root", "", "Practice_db");

  if(!$dbConn){
    die("Connection Error");
  }

?>