
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Manipulations</title>
</head>
<body>
    <h1>Array Manipulations</h1>
    <?php
    // Initial array
    $array = ["apple", "banana", "cherry"];
    echo "<h3>Initial array:</h3>";
    print_r($array);

    // Add an element
    array_push($array, "date");
    echo "<h3>After adding 'date':</h3>";
    print_r($array);

    // Modify an element
    $array[1] = "blueberry";
    echo "<h3>After modifying 'banana' to 'blueberry':</h3>";
    print_r($array);

    // Delete an element
    unset($array[2]);
    echo "<h3>After deleting 'cherry':</h3>";
    print_r($array);

    // Sort the array
    sort($array);
    echo "<h3>After sorting:</h3>";
    print_r($array);

    // Search for an element
    $searchElement = "apple";
    $key = array_search($searchElement, $array);
    echo $key !== false ? "<h3>'$searchElement' found at index $key.</h3>" : "<h3>'$searchElement' not found.</h3>";

    // Merge two arrays
    $array2 = ["fig", "grape"];
    $mergedArray = array_merge($array, $array2);
    echo "<h3>Merged array:</h3>";
    print_r($mergedArray);
    ?>
</body>
</html>
