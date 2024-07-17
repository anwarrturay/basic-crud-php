<?php
  $id = $_POST["id"];

  $conn = new mysqli("localhost", "root", "", "Practice_db");

  if(!$conn){
    die("CONNECTION ERROR!");
  }
  // Fetch Current user details
  $query = "SELECT firstname, lastname, email FROM userInfo WHERE id=$id";

  $stmt = $conn->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  $user_data = $result->fetch_assoc();

  if($user_data){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
      <h1>Update Item</h1>
      <form action="update_process.php" method="post">

          <input type="hidden" name="id" value="<?php echo $id; ?>">

          <!-- FIRSTNAME -->
          <label for="fname">FirstName:</label>
          <input type="text" id="fname" name="firstname" value="<?php echo htmlspecialchars($user_data['firstname']); ?>"><br><br>

          <!-- LASTNAME -->
          <label for="lname">LastName:</label>
          <input id="lname" name="lastname" value="<?php echo htmlspecialchars($user_data['lastname']); ?>"><br><br>

          <!-- EMAIL -->
          <label for="email">Email:</label>
          <input id="email" name="email"
          value="<?php echo htmlspecialchars($user_data['email']); ?>"><br><br>

          <input type="submit" value="Update">
      </form>
    </body>
    </html>
<?php
} else {
  echo "User data not found.";
}
  $conn->close();
?>