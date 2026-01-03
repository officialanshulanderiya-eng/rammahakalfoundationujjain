<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $conn = new mysqli('bom1plzcpnl503238', 'gv3ysob7f009', 'Anshu769@99', 'rammahakal');

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user's data based on the entered username
    $query = "SELECT id, username, password FROM stusers WHERE username = '$username'";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        // Verify the password
        if ($password === $storedPassword) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: userprofile.php"); // Redirect to dashboard or other authenticated page
        } else {
            $error = "Invalid password. Please try again.";
        }
    } else {
        $error = "Username not found. Please check your credentials.";
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Page</title>
    <link rel="stylesheet" href="css/lgn.css">
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
        <div class="login-box">
            <h1>Student Login</h1>
            <form action="login.php" method="post">
                <div class="input-container">
                    <input type="text" name="username" id="username" placeholder="Anshu123456789" required>
                </div>
                <div class="input-container">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <button type="submit">Login</button><br>
                
            </form>
            
            <button style="font-size:15px";><a href="register.php">click here to register</a></button>
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
