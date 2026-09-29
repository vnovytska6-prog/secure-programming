<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $student_id = $_POST["student_id"];
    
    //  empty() - check if fields are empty
    if (empty($email)) $errors[] = "Email is required";
    if (empty($student_id)) $errors[] = "Student ID is required";
    
    //  preg_match() - regex for email
    if (!preg_match("/^[^@]+@[^@]+\.[a-z]+$/", $email)) {
        $errors[] = "Invalid email format";
    }
    
    // preg_match() - regex for student ID (8 digits)
    if (!preg_match("/^[0-9]{8}$/", $student_id)) {
        $errors[] = "Student ID must be exactly 8 digits";
    }
    
    // filter_input() - sanitize email
    $safe_email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    
    // strip_tags() - remove HTML
    $safe_email = strip_tags($safe_email);
    
    // htmlspecialchars() - prevent XSS
    $safe_email = htmlspecialchars($safe_email);
    
    if (empty($errors)) {
        echo "Valid! Email: " . $safe_email;
    } else {
        foreach ($errors as $err) echo "Try again $err<br>";
    }
}
?>

<form method="POST">
    Email: <input type="text" name="email"><br>
    Student ID (8 digits): <input type="text" name="student_id"><br>
    <input type="submit">
</form>
