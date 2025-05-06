<?php

$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "phpclass";

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstname = "John";
$lastname = "Doe";
$email = "example@gmail.com";
$sql = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
}
