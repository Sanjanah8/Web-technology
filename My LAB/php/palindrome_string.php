
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <h1>Check for Palindrome</h1>
    <form method="POST" action="">
        <input type="text" name="string" placeholder="Enter a word or sentence" required>
        <input type="submit" value="Check">
    </form>

    <?php
    function isPalindrome($str) {
        $cleaned = preg_replace("/[^A-Za-z0-9]/", '', strtolower($str));
        return $cleaned == strrev($cleaned);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST['string'];
        if (isPalindrome($inputString)) {
            echo "<h2>'$inputString' is a palindrome.</h2>";
        } else {
            echo "<h2>'$inputString' is not a palindrome.</h2>";
        }
    }
    ?>
</body>
</html>
