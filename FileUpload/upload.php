<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = "uploads/";
    $file = $_FILES["fileToUpload"];

    // Ensure the upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $fileName = basename($file["name"]);
    $fileName = preg_replace("/[^a-zA-Z0-9\._-]/", "_", $fileName); // Sanitize file name
    $targetFile = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $fileSize = $file["size"];

    $allowedTypes = ["jpg", "png", "gif", "pdf", "txt"];
    if (file_exists($targetFile)) {
        echo "Error: File already exists.";
        exit;
    }

    if (!in_array($fileType, $allowedTypes)) {
        echo "Error: Only JPG, PNG, GIF, PDF, TXT files are allowed.";
        exit;
    }

    if ($fileSize > 2 * 1024 * 1024) {
        echo "Error: File size exceeds 2MB.";
        exit;
    }

    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        echo "File uploaded successfully: <a href='" . htmlspecialchars($targetFile) . "'>" . htmlspecialchars($fileName) . "</a>";
    } else {
        echo "Error: Unable to upload file.";
    }
}
