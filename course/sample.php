<?php
  require_once("db2.php");
  $sql = "select *from customers where age=50";
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
  <h1>FETCHING DATA FROM DATABASE USING THE WHERE CLAUSE</h1>
  <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <?php
                while($rows_in_db = mysqli_fetch_assoc($result)){ 
              ?>
              <td><?php echo $rows_in_db['id']?></td>
              <td><?php echo $rows_in_db['name']?></td>
              <td><?php echo $rows_in_db['address']?></td>
              <td><?php echo $rows_in_db['age']?></td>
            </tr> 
              <?php
                  }
                  mysqli_free_result($result);
              ?>
        </tbody>
    </table>
</body>
</html>