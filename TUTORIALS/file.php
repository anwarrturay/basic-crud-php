<?php 

  $conn = mysqli_connect('localhost', 'root', '', 'info'); 

  if(!$conn){ 
    die("Could not connect: " . mysqli_error()); 
  }
  

?> 
