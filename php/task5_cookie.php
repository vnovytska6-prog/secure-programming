<?php

$cookie_name = "user";
$message = "";

// if cookie exists
if (isset($_COOKIE[$cookie_name])) {
    // cookie exists - read it
    $message = "Welcome back " . $_COOKIE[$cookie_name];
} else {
    // cookie doesn't exist - create it
    setcookie($cookie_name, "Vika", time() + 3600, "/", "", false, true);
    $message = "Cookie created! Visit again in 1 hour";
}

echo $message;

// delete cookie if user clicks delete
if (isset($_GET["delete"])) {
    setcookie($cookie_name, "", time() - 3600, "/");
    echo "<br>Cookie deleted. Refresh page.";
}
?>

<br>
<a href="?delete=1">Delete cookie</a>
