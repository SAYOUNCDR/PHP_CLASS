<?php
$to = "sayounparui45@gmail.com";
$subject = "Test Email from XAMPP";
$message = "Hello, this is a test email sent from a local XAMPP server!";
$from = "pheonixgamer12345@gmail.com";
$headers = "From: $from";

$check = mail($to, $subject, $message, $from, $headers);
if($check){
    echo "Email sent successfully!";
} else {
    echo "Email could not be sent.";
}