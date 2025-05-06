<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "phpclass";

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);