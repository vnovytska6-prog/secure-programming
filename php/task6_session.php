<?php

session_start();

// creating session and set variables
if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 1;
    $_SESSION["user"] = "vika";
    $message = "Session created!";
} else {
    $_SESSION["count"]++;
    $message = "Session exists! You visited " . $_SESSION["count"] . " times";
}

// get session ID
$session_id = session_id();

// destroying session if logout
if (isset($_GET["destroy"])) {
    session_destroy();
    $message = "Session destroyed!";
    header("Refresh:0");
}
?>

<html>
<body>

<h2>Session Demonstration</h2>

<p><?php echo $message; ?></p>

<p><strong>Session ID:</strong> <?php echo $session_id; ?></p>
<p><strong>User:</strong> <?php echo $_SESSION["user"]; ?></p>
<p><strong>Visits:</strong> <?php echo $_SESSION["count"]; ?></p>

<a href="?destroy=1">Destroy session</a>

</body>
</html>
