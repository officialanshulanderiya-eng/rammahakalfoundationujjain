<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST['username'];
  $number = $_POST['number'];
  $password = $_POST['password'];
   // Encrypt the password

  // Connect to the database
  $conn = new mysqli('bom1plzcpnl503238', 'gv3ysob7f009', 'Anshu769@99', 'rammahakal');

  // Check for connection errors
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Check if the username already exists
  $query = "SELECT id FROM stusers WHERE username = '$username'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    header("Location: userlgn.html");
    exit;
  }

  // Insert new user into the database
  $query = "INSERT INTO stusers (username, number, password) VALUES ('$username', '$number', '$password')";
  if ($conn->query($query) === TRUE) {
    header("Location: login.php");
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>
<!-- registration.html -->
</form>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Page</title>
  <link rel="stylesheet" href="css/3dregis.css">
  <style>
    body {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
</style>
</head>
<body>
  <div class="container">
    <div class="card">
      <h2>Student Registration Form</h2>
      <form action="" method="post">
        <label for="username">Samagra Id:</label>
        <input type="text" id="username" name="username" placeholder="Enter Name and 9 Digit SamagraId" required>

        <label for="number">Mobile number:</label>
        <input type="number" id="number" name="number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Enter 10 Digit Mobile number" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Register</button><br>
        
      </form>
      <button style="font-size:15px";><a href="login.php">click here to Login</a></button>
        <button style="font-size:15px";><a href="https://rammahakalfoundation.com/">Home</a></button>
    </div>
  </div>
  <script>
        document.addEventListener("contextmenu", function(e) {
        e.preventDefault();
        });
    
        document.addEventListener("DOMContentLoaded", function() {
        // Load protected content dynamically here
        });
    </script>
</body>
</html>