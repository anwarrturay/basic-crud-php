<?php

  $delContent = $_POST["delContent"];
  $conn = mysqli_connect("localhost", "root", "", "TUTORIALS");

  if(!$conn){
    die("CONNECTION ERROR");
  }else{
    $query = "UPDATE tutorial_tb1 set item='computer' where id=$delContent";

    $stmt = $conn->prepare($query);

    if($stmt->execute()){
      echo "RECORD UPDATED SUCCESSFULLY";
    }else{
      echo "UNABLE TO UPDATE RECORD";
    }

  }


?>