<?php
function customError($errno, $errstr, $errfile, $errline)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Error on line $errline in $errfile<br>";
    // You can also log the error to a  file and send it via email if desired
}
set_error_handler("customError");

//Trigger some errors
echo $undefinedVariable;
trigger_error("A custom error waring has occured", E_USER_WARNING);

?>
