<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    // NO protection vulnerable to XSS
    echo "Hello " . $name;
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter your name:
    <input type="text" name="name">
    <input type="submit" value="Send">
</form>
