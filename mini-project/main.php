<?php
  require_once("main_db.php");
  $query = "SELECT *FROM userInfo";
  $result = mysqli_query($dbConn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <h1>WELCOME HOME</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
        while($row = mysqli_fetch_assoc($result)){
      ?>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['firstname']?></td>
      <td><?php echo $row['lastname']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['pasword']?></td>
      <td>
        <form action="update.php" method="post" style="display:inline;">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="submit"  value="Update" class="up-btn">
        </form>
        <form action="delete.php" method="post" style="display:inline;">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="submit" value="Delete" class="del-btn" onclick="return confirm('Are you sure?') ">
        </form>
      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
<a href="add-new-user.php"><button class="add-btn">Add User</button></a>
</body>
</html>