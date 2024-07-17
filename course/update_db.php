<?php
  $name=$_POST['name'];
  $email=$_POST['email'];
  
  $con = mysqli_connect("localhost", "root", "", "student");

  if(!$con){
    die("CONNECTION ERROR");
  }else{
    $sql = "update info set fullname='$name', email='$email' where id=3 ";

    $stmt = $con->prepare($sql);
  
    if($stmt->execute()){
      echo "Record Updated Successfully";
    }else{
      echo "Unsuccessfull update". $stmt->error;
    }
  
    $stmt->close();
    $con->close();
  }

?>