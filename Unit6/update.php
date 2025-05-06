<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "phpclass";

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

$sql ="UPDATE users SET firstname='First', lastname='Name' WHERE id=1";

if(mysqli_query($conn, $sql)) {
    echo "Record updated successfully<br>";
} else {
    echo "Error updating record: " . mysqli_error($conn) . "<br>";
}
mysqli_close($conn);