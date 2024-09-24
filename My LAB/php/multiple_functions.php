
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Functions</title>
</head>
<body>
    <h1>Function Demonstration</h1>
    
    <h2>Factorial Calculation</h2>
    <form method="POST" action="">
        <input type="number" name="factorial_num" placeholder="Enter a number" required>
        <input type="submit" name="calculate_factorial" value="Calculate Factorial">
    </form>

    <h2>Area of Circle</h2>
    <form method="POST" action="">
        <input type="number" name="radius" placeholder="Enter radius" required>
        <input type="submit" name="calculate_area" value="Calculate Area">
    </form>

    <?php
    function factorial($n) {
        if ($n < 2) return 1;
        return $n * factorial($n - 1);
    }

    function areaOfCircle($radius) {
        return pi() * pow($radius, 2);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['calculate_factorial'])) {
            $num = $_POST['factorial_num'];
            echo "<h3>Factorial of $num is: " . factorial($num) . "</h3>";
        }

        if (isset($_POST['calculate_area'])) {
            $radius = $_POST['radius'];
            echo "<h3>Area of circle with radius $radius is: " . areaOfCircle($radius) . "</h3>";
        }
    }
    ?>
</body>
</html>
