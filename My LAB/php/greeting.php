<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Greeting</title>
</head>
<body>
    <h1>Enter Your Name</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Your Name" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = trim($_POST['username']);
        
        if (!empty($username)) {
            echo "<h2>Hello, $username! Welcome to my website.</h2>";
        } else {
            echo "<h2>Please enter a valid name.</h2>";
        }
    }
    ?>
</body>
</html>
