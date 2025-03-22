<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Validation</title>
</head>

<body>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    //trim stripsplash htmlspecialchars high chances in ETP
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email is valid.<br>";
        } else {
            echo "Invalid email.<br>";
        }

        // Validate phone number
        if (preg_match('/^\+?\d{10,15}$/', $phone)) {
            echo "Phone number is valid.<br>";
        } else {
            echo "Invalid phone number. It must be 10-15 digits and may start with '+'.<br>";
        }

        // Validate username
        if (preg_match('/^[a-zA-Z0-9_]{4,20}$/', $username)) {
            echo "Username is valid.<br>";
        } else {
            echo "Invalid username. It must be 4-20 characters long and can contain letters, numbers, and underscores.<br>";
        }

        // Validate password
        if (preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) {
            echo "Password is valid.<br>";
        } else {
            echo "Invalid password. It must be at least 8 characters long, contain at least one capital letter, one number, and one special character.<br>";
        }


        if (preg_match('/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/', $email)) {
            echo "Email matches the custom regex pattern.<br>";
        } else {
            echo "Email does not match the custom regex pattern.<br>";
        }
    }
    ?>
</body>

</html>