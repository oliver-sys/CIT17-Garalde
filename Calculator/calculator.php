<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Enter Number 1: <input type="text" name="number1">
        Enter Number 2: <input type="text" name="number2">
        <input type="submit" value="Calculate">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve values from the form
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
    
        // Check if the values are numeric
        if (is_numeric($number1) && is_numeric($number2)) {
            // Perform basic calculations
            $sum = $number1 + $number2;
            $difference = $number1 - $number2;
            $product = $number1 * $number2;
            $quotient = ($number2 != 0) ? $number1 / $number2 : "Cannot divide by zero";
    
            // Display the results
            echo "<h2>Results:</h2>";
            echo "Sum: $sum<br>";
            echo "Difference: $difference<br>";
            echo "Product: $product<br>";
            echo "Quotient: $quotient";
        } else {
            // Display an error message if inputs are not numeric
            echo "<p>Please enter valid numeric values for Number 1 and Number 2.</p>";
        }
    }
    ?>
</body>
</html>