<?php 
  // USER INPUT
  $fname = $_POST["fname"];
  $item = $_POST["item"];

  // DATABASE CONNECTION
  $dbhost = 'localhost'; 
  $dbuser = 'root'; 
  $dbpass = ''; 
  $dbname = 'TUTORIALS';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

  if(!$conn){ 
    die('Could not connect: ' . mysqli_error()); 
  }

  $sql = "INSERT INTO tutorial_tb1(name, item)VALUES('$fname', '$item')"; 

  $result = mysqli_query($conn, $sql); 
  if(!$result){ 
    die('Data Sent Successfully: ' . mysqli_error()); 
  } 
  else{
    echo "DATA INSERTED SUCCESSFULLY";
  }


?> 

