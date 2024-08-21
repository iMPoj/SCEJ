<!DOCTYPE html>
<html lang="en">
<?php
session_start();

// Database connection
$conn = mysqli_connect('localhost:3308', 'root', '', 'user_db');

// Check if the form is submitted for login or registration
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    
    // Check if the entered credentials match the database records
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){
        // Store email in session and redirect to the homepage
        $_SESSION['email'] = $email;
        header("Location: index-2.php");
        exit();
    } else {
        echo "Invalid email or password";
    }
} elseif (isset($_POST['register'])) {
    $username = $_POST['txt'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    
    // Check if user already exists
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){
        echo "User already exists";
    } else {
        // Insert new user into the database
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($conn, $query);
        echo "Registration successful";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCEJ</title>
</head>
<link rel="stylesheet" href="lstyle.css">
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">  

        <div class="signup">
            <form action="login.php" method="POST">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="txt" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="Password" name="pswd" placeholder="Password" required="">
                <button type="submit" name="register">Sign up</button>
            </form>
        </div>

        <div class="login">
            <form action="login.php" method="POST">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="Password" name="pswd" placeholder="Password" required="">
                <button type="submit" name="login">Login</button>
            </form>

        </div>
    </div>
</body>
</html>
