
<?php
session_start(); // Start the session
$hardcodedUsername = "admin";
$hardcodedPassword = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $hardcodedUsername && $password == $hardcodedPassword) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: welcome.php"); // Redirect to welcome page
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</body>
</html>

<!-- welcome.php -->
<?php
session_start(); // Start the session
if (!isset($_SESSION['loggedin'])) {
    header("Location: login_system.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>

<!-- logout.php -->
<?php
session_start();
session_destroy(); // Destroy the session
header("Location: login_system.php"); // Redirect to login page
exit();
?>
