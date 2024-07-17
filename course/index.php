<?php
  require_once("db.php");
  $query = "select *from staffsInfo";
  $result = mysqli_query($conn, $query);
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
  <h1>FETCHING DATA FROM DATABASE</h1>
  <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <?php
                while($row=mysqli_fetch_assoc($result)){
              ?>

              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['gender'] ?></td>

            </tr>
              <?php
                }
              ?>
        </tbody>
    </table>
</body>
</html>