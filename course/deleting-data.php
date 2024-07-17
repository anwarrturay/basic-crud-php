<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deleting Data from Database Using PHP script</title>
</head>
<body>
  <h1>Deleting Data from Database Using PHP script</h1>
  <?php
    require_once("db.php");
    $query = "DELETE FROM customers WHERE id > 2 ";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
      header("Location: fetching-data.php");
    }else{
      echo "No Record Deleted";
    }
  ?>
</body>
</html>