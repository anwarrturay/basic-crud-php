<?php
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $pasword = $_POST["pasword"];

  $dbConn = new mysqli("localhost", "root", "", "Practice_db");

  if(!$dbConn){
    die("CONNECTION ERROR!");
  }
  else{
    $hashed_pwd = password_hash($pasword, PASSWORD_BCRYPT);
    $query = "INSERT INTO userInfo(firstname, lastname, email, pasword)VALUES('$firstname', '$lastname', '$email', '$hashed_pwd')";

    if(mysqli_query($dbConn, $query)){
      header('Location: main.php');
      exit();
    }else{
      echo "NOT REGISTERD";
    }
  }

 
  
?>