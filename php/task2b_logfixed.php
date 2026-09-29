<?php

$conn = new PDO("mysql:host=localhost;dbname=loginfo", "user", "user123");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // using prepared statement with ? placeholders
    // this way user input is treated as data, not as SQL code
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    
    // execute with the actual values
    $stmt->execute([$username, $password]);
    
    if ($stmt->rowCount() > 0) {
        echo "Welcome! You are logged in";
    } else {
        echo "Wrong username or password";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
