
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>

    <?php
    $hardcodedUsername = "admin";
    $hardcodedPassword = "password123";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $hardcodedUsername && $password == $hardcodedPassword) {
            echo "<h2>Login successful! Welcome, $username.</h2>";
        } else {
            echo "<h2>Invalid username or password.</h2>";
        }
    }
    ?>
</body>
</html>
