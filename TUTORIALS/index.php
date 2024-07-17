<?php
  require_once("tutorials_db.php");
  $query = "SELECT *FROM tutorial_tb1";
  $result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="tutorials.css">
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Item</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
          while($result_set = mysqli_fetch_assoc($result)){
          ?>

          <td><?php echo "$result_set[id]"?></td>
          <td><?php echo "$result_set[name]"?></td>
          <td><?php echo "$result_set[item]"?></td>
          
      </tr>
      <?php
        }
      ?>
      
    </tbody>
  </table>
</body>
</html>