<?php
$uploadDir = "uploads/";

//Check if Directory exists
if (!is_dir($uploadDir)) {
    die("Upload directory does not exist");
}

$files = array_diff(scandir($uploadDir), [".", ".."]);

echo "<h3>Uploaded Files</h3>";
if (empty($files)) {
    echo "No files uploaded yet";
} else {
    foreach ($files as $file) {
        echo "<a href='$uploadDir$file' download>$file</a><br>";
    }
}
