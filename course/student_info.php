<?php
  require_once("db2.php");
  $sql = "SELECT *FROM info";
  $result = mysqli_query($connection, $sql);
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
  <table>
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
    </thead>
    <tbody>
      <tr>
        <?php 
          while($row=mysqli_fetch_assoc($result)){
        ?>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['email']?></td>
      </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</body>
</html>