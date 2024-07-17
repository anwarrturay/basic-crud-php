<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>UPDATING DATA FROM DATABASE</h1>
  <?php
    require_once("db2.php");
    $sql = "update customers set name='JK' where name='joel' ";
    $stmt = $connection->prepare($sql);

    if($stmt->execute()){
      echo "Record Updated Successfully";
    }
    else{
      echo "Error updating record" . $stmt->error;
    }
 
    $stmt->close();
    $connection->close();

  ?>
</body>
</html>