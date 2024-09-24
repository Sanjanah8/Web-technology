
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <h1>Check Palindrome</h1>
    <form method="POST" action="">
        <input type="number" name="number" placeholder="Enter a number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        $reversedNumber = strrev($number);

        if ($number == $reversedNumber) {
            echo "<h2>The number $number is a palindrome.</h2>";
        } else {
            echo "<h2>The number $number is not a palindrome.</h2>";
        }
    }
    ?>
</body>
</html>
