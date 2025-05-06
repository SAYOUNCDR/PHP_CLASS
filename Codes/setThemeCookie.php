<?php
if(isset($_POST['name']) && isset($_POST['theme'])) {
    $name = $_POST['name'];
    $theme = $_POST['theme'];

    $_SESSION['name'] = $name; 
    $_SESSION['theme'] = $theme;
    setcookie("theme", $theme, time() + 60, "/"); 

    header("Location: ./index.php?name=$name&theme=$theme");
    exit();
} else {
    echo "Please provide both name and theme.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Changer With cookie</title>

</head>
<body>
    <form action="./setThemeCookie.php" method="post">
        <label for="name">User Name:</label>
        <br><br>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="theme">Enter Theme</label>
        <br><br>
        <input type="text" id="theme" name="theme" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>