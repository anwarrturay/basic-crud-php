<?php
  $id = $_POST["id"];
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];

  $conn = new mysqli("localhost", "root", "", "Practice_db");

  if(!$conn){
    die("CONNECTION ERROR");
  }

  $query = "UPDATE userInfo SET firstname='$firstname', lastname='$lastname', email='$email' where id=$id";

  $stmt = $conn -> prepare($query);
  if($stmt->execute()){
    header("Location: main.php");
  }else{
    echo "Error in Updating User details";
  }
  $stmt->close();
  $conn->close();
?>