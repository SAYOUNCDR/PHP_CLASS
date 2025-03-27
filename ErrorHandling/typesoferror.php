<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


//Triggering an E_NOTICE error -This will stop the script from running
echo "This is an E_ERROR example \n";
trigger_error("This is an error (E_ERROR)", E_USER_ERROR);

//Triggering an E_WARNING error - This will not stop the script from running
echo "This is an E_WARNING example \n";
trigger_error("This is an error (E_WARNING)", E_USER_WARNING);

//Triggering an E_NOTICE error - This will not stop the script from running
echo "This is an E_NOTICE example \n";
$undefinedVariable; //This will trigger an E_NOTICE error

//Triggering an E_NOTICE error - This will not stop the script from running
trigger_error("This is a user generated error (E_USER_NOTICE)", E_USER_NOTICE);

//Trigger an E_USER_WARNING error - This will not stop the script from running
echo "This is an E_USER_WARNING example \n";
trigger_error("This is a user generated error (E_USER_WARNING)", E_USER_WARNING);

//Triggering an E_USER_ERROR error - This will stop the script from running
echo "This is an E_USER_ERROR example \n";
trigger_error("This is a user generated error (E_USER_ERROR)", E_USER_ERROR);

//The following code will not execute because of the user-generated E_USER_ERROR error
echo "This code will not execute";
?>