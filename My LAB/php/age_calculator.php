
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <h1>Calculate Your Age</h1>
    <form method="POST" action="">
        <input type="date" name="birthdate" required>
        <input type="submit" value="Calculate Age">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthdate = new DateTime($_POST['birthdate']);
        $today = new DateTime('today');
        $age = $today->diff($birthdate);
        
        echo "<h2>Your age is: {$age->y} years and {$age->m} months.</h2>";
    }
    ?>
</body>
</html>
