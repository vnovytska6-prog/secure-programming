<?php
// checking if data exists in url

if (isset($_GET["name"])) {
    $name = $_GET["name"];
    echo "Hello " . $name;
}
?>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter your name:
    <input type="text" name="name">
    <input type="submit" value="Send">
</form>
