
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="POST" action="">
        <input type="number" name="num1" placeholder="First Number" required>
        <input type="number" name="num2" placeholder="Second Number" required>
        <select name="operation" required>
            <option value="">Select Operation</option>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<h2>Cannot divide by zero!</h2>";
                }
                break;
        }

        if ($operation != 'divide' || $num2 != 0) {
            echo "<h2>Result: $result</h2>";
        }
    }
    ?>
</body>
</html>
