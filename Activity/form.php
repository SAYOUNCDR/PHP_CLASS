<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Form</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <form action="form.php" method="POST" class="bg-white p-6 rounded shadow-md w-96">
            <h2 class="text-2xl font-bold mb-4">User Form</h2>
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="file" class="block text-sm font-medium text-gray-700">Upload File</label>
                <div class="mt-1 flex items-center justify-center border-2 border-dashed border-gray-300 rounded-md p-4 hover:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500">
                    <input type="file" id="file" name="file" class="hidden" onchange="document.getElementById('file-name').textContent = this.files[0]?.name || 'No file chosen'">
                    <label for="file" class="cursor-pointer text-blue-500 hover:underline">Choose a file</label>
                    <span id="file-name" class="ml-2 text-gray-500">No file chosen</span>
                </div>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Submit</button>
        </form>
    </div>
</body>

</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // Validate name
    if (empty($_POST['name'])) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['name'])) {
        $errors[] = "Only letters and white space are allowed in the name.";
    }

    // Validate file upload
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf'];
        $fileExtension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            $errors[] = "Invalid file type. Only JPG, JPEG, PNG, and PDF files are allowed.";
        }
    } else {
        $errors[] = "File upload failed or no file was uploaded.";
    }

    // Display errors or success message
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        echo "<p style='color: green;'>Form submitted successfully!</p>";
    }
}

?>

