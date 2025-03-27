<?php
//Define a variable without initilasing it
if ($userdefinedVariable == 10) {
    echo "The variable is 10";
} else {
    echo "The variable is not 10";
}

//Divide by zero error with the help of a conditional statement
$numerator = 10;
$result= $numerator / 0;
echo "The result is: $result"; //This line will not execute and the script will stop running