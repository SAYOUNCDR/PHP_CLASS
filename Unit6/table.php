<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "phpclass";

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

?>
