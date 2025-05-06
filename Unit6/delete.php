<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "phpclass";

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql =" DELETE FROM users WHERE id=4";
if(mysqli_query($conn, $sql)) {
    echo "Record deleted successfully<br>";
} else {
    echo "Error deleting record: " . mysqli_error($conn) . "<br>";
}
mysqli_close($conn);