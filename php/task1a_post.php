<?php

//checking if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "Hello " . $name;
}
?>

<!-- PHP_SELF var in the action field of the form -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Enter your name:
<input type="text" name="name">
<input type="submit" value="Send">
</form> 
