<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $con = new mysqli("localhost", "root", "", "student");
    if(!$con){
      die("CONNECTION ERROR");
    }
    $sql = "UPDATE customers SET address='new York City' where address='sallieu street' ";

    $stmt = $con->prepare($sql);
    if($stmt->execute()){
      header("Location: fetching-data.php");
      exit();
    }else{
      echo "NO RECORD UPDATED";
    }
    
  ?>
</body>
</html>