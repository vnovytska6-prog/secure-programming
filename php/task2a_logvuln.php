<?php

// connecting to database
$conn = new PDO("mysql:host=localhost;dbname=loginfo", "user", "user123");

// if user clicked submit button
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // get what user typed in the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // user input directly into the query
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
    $result = $conn->query($sql);
    
    if ($result->rowCount() > 0) {
        echo "Welcome! You are logged in";
    } else {
        echo "Wrong username or password";
    }
}
?>

<!-- html form -->
<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
