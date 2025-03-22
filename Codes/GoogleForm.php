<?php

if (isset($_POST["submit-btn"])) {
    $name = $_POST["student_name"];
    $reg = $_POST["reg-no"];
    $section = $_POST["section"];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Form</title>
</head>

<body>
    <div class="main">
        <h1>Google Form</h1>
        <form action="./GoogleForm.php" method="post">
            <label for="student_name">Student Name</label> <br>
            <input type="text" name="student_name" id="student_name"><br><br>

            <label for="reg-no">Registration Number</label> <br>
            <input type="number" name="reg-no" id="reg-no"> <br> <br>

            <label for="section">Section</label> <br>
            <input type="text" name="section" id="section"> <br> <br>

            <input type="submit" value="Submit" name="submit-btn">
        </form>

        <?php echo $name ."<br>". $reg ."<br>". $section ?>
    </div>
</body>

</html>