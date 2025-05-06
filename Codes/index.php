<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>This is index page</h1>
    <h2>Welcome <?php echo $_COOKIE['name']; ?></h2>
    <p>The set theme is <?php echo $_COOKIE['theme']  ?></p>
</body>

</html>