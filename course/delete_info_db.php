<?php
  $email = $_POST['email'];
  $db_conn = mysqli_connect("localhost", "root", "", "student");

  if(!$db_conn){
    die("CONNECTION ERROR");
  }else{
    $query = "delete from info where email='$email' ";
    $stmt = $db_conn->prepare($query);
    if($stmt->execute()){
      echo "ONE RECORD DELETED";
    }else{
      echo "FAILED DELETION".$stmt->error;
    }
  }


?>