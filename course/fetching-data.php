<?php
  require_once("db-fetch-data.php");
  $sql = "SELECT *FROM customers WHERE id < 5";
  $result = mysqli_query($connection_to_db, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

      while($row=mysqli_fetch_assoc($result)){

    ?>
      <td><?php echo $row["id"]?></td>
      <td><?php echo $row["name"]?></td>
      <td><?php echo $row["address"]?></td>
      <td><?php echo $row["age"]?></td>
      </tr>
    <?php
      }
      mysqli_free_result($result);
    ?>
  </tbody>
</table>
</body>
</html>