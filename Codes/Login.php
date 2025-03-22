<?php
session_start();

$valid_username = "admin";
$valid_password = "passkey@123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pass = $_POST["password"];

    //validate login 
    if ($username == $valid_username && $pass == $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");

        exit();
    } else {
        echo "Invalid credential . <a href='Login.php'>Try Again</a>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>

<body>
    <form action="Login.php" method="POST">
        <label for="">Enter Usesrname</label>
        <input type="text" placeholder="usernmae" name="username">
        <label for="">Password</label>
        <input type="password" name="password">
        <button type="submit" name="login">Submit</button>
    </form>
</body>

</html>