<!DOCTYPE html>
<html>
<head>
<title>Array Functions</title>
</head>
<body>
<?php
// Function to display array elements
function displayArray($array) {
    echo "<ul>";
    foreach ($array as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
// Function to find the largest value in an array
function findLargest($array) {
    $largest = $array[0];
    foreach ($array as $value) {
        if ($value > $largest) {
            $largest = $value;
        }
    }
    
    return $largest;
}
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the user's input
    $numbers = explode(",", $_POST['numbers']);
    // Perform array operations
    echo "<h2>Original Array:</h2>";
    displayArray($numbers);
    echo "<h2>Sorted Array:</h2>";
    sort($numbers);
    displayArray($numbers);
    echo "<h2>Largest Value:</h2>";
    echo findLargest($numbers);
} else {
    // Display the form if it hasn't been submitted yet
    ?>
<h1>Enter Numbers</h1>
<form method="post" action="">
<label for="numbers">Enter numbers separated by commas:</label><br>
<input type="text" id="numbers" name="numbers"><br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
}
?>
</body>
</html>
