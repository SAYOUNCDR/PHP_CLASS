<?php

function validateEmail($email)
{
    if (preg_match('/^[A-Za-z0-9._%+-]+@gmail+\.[A-Za-z]{2,}$/', $email)) {
        return "Valid Email";
    } else {
        return "Invalid Email";
    }
}

$email = "Phpcourse@gmail.com";
echo validateEmail($email) . "\n";


function validatePhone($number)
{
    if (preg_match("/^(\+91)?[0-9]{10}$/", $number)) {
        return "Valid Phone Number";
    } else {
        return "Invalid Phone Number";
    }
}

$number = "+916394750129";
echo validatePhone($number) . "\n";
