<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New User</title>
  <link rel="stylesheet" href="css/new-user.css">
</head>
<body>
  <h1>WELCOME TO IFOODS SYSTEM</h1>
  <form action="db_connection.php" method="POST" class="form-fields">
    <div class="input">
      <div>FirstName: </div>
      <input type="text" name="firstname" placeholder="Firstname">
    </div>
    <div class="input">
      <div>LastName: </div>
      <input type="text" name="lastname" placeholder="Lastname">
    </div>
    <div class="input">
      <div>Email: </div>
      <input type="text" name="email" placeholder="email">
    </div>
    <div class="input">
      <div>Password: </div>
      <input type="password" name="pasword" placeholder="Password">
    </div>
    <button type="submit" name="submit" class="signUp-btn">Add</button>
  </form>  

</body>
</html>