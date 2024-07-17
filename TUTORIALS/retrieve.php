<?php
  $dbhost = 'localhost'; 
  $dbuser = 'root'; 
  $dbpass = ''; 
  $dbname = 'TUTORIALS';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

  if(!$conn){ 
    die('Could not connect: ' . mysqli_error()); 
  }
  
  $query = "SELECT *FROM tutorial_tb1";

  $set_result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="fetchdata.css">
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Last</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
          while($row = mysqli_fetch_assoc($set_result)){
        ?>

        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['item']?></td>

      </tr>
      <?php
          }
          mysqli_close($conn); 
      ?>
    </tbody>
  </table>
</body>
</html>