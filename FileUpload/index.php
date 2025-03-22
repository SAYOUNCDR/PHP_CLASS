<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <h2>Uoload a File</h2>
    <form action="./upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileTOUpload" id="" required>
        <button type="submit" name="submit">Upload</button>
    </form>
    <hr>
    <?php include 'list_files.php'; ?> <!--include the file listing-->
</body>

</html>