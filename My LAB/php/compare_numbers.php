
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Numbers</title>
</head>
<body>
    <h1>Compare Two Numbers</h1>
    <form method="POST" action="">
        <input type="number" name="num1" placeholder="First Number" required>
        <input type="number" name="num2" placeholder="Second Number" required>
        <input type="submit" value="Compare">
    </form>

    <?php
    function compare($a, $b) {
        return $a > $b ? $a : $b;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $largest = compare($num1, $num2);
        echo "<h2>The larger number is: $largest</h2>";
    }
    ?>
</body>
</html>
