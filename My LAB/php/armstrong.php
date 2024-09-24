<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h1>Check Armstrong Number</h1>
    <form method="POST" action="">
        <input type="number" name="number" placeholder="Enter an integer" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        $sum = 0;
        $numDigits = strlen((string)$number);

        $temp = $number;
        while ($temp > 0) {
            $digit = $temp % 10;
            $sum += pow($digit, $numDigits);
            $temp = (int)($temp / 10);
        }

        if ($sum == $number) {
            echo "<h2>The number $number is an Armstrong number.</h2>";
        } else {
            echo "<h2>The number $number is not an Armstrong number.</h2>";
        }
    }
    ?>
</body>
</html>
