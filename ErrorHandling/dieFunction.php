<?php
$filename = "example.php";

if(!file_exists($filename))
{
    //Terminate script execution if file does not exist
    die("File not found");
}
// if file exists, output the file
echo "The file '$filename' exists";
?>
