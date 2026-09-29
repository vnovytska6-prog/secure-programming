<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];

    // htmlspecialchars() converts < > & " ' to html entities       
    $safe_name = htmlspecialchars($name);
    echo "Hello " . $safe_name;
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter your name:
    <input type="text" name="name">
    <input type="submit" value="Send">
</form>
