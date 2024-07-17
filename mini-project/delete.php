<?php
  $id = $_POST["id"];

  $conn = new mysqli("localhost", "root", "", "Practice_db");

  if(!$conn){
    die("CONNECTION ERROR");
  }

  $query = "DELETE FROM userInfo WHERE id=$id";
  $stmt = $conn->prepare($query);
  if($stmt->execute()){
    header("Location: main.php");
  }else{
    echo "User not deleted";
  }
  $stmt->close();
  $conn->close();
?>