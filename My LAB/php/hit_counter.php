
<?php
// Set cookie parameters
$cookie_name = "page_visits";
$cookie_value = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] + 1 : 1;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // 30 days expiration
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hit Counter</title>
</head>
<body>
    <h1>Welcome to My Website!</h1>
    <p>You have visited this page <?php echo $cookie_value; ?> time(s).</p>
</body>
</html>
