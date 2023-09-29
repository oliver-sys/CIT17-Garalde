<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
    <?php
    $int_var = 12345;
    $another_int = -12345 + 12345;

    $many = 2.2888800;
    $many_2 = 2.2111200;
    $few = $many + $many_2;
    print $many + $many_2 = $few; 

   
    $true_num = 3 + 0.14159;
    $true_str = "Tried and true";
    $true_array[49] = "An array element";
    $false_array = array();
    $false_null = NULL;
    $false_num = 999 - 999;
    $false_str = "";

    $my_var = NULL;

    $string_1 = "This is a string in double quotes";
    $string_2 = "This is a somewhat longer, singly quoted string";
    $string_39 = "This string has thirty-nine characters";
    $string_0 = ""; // a string with zero characters

    $variable = "name";
    $literally = '<br>My $variable will not print!<br>';
    print($literally);
    $literally = "My $variable will print!<br>";
    print($literally);

    define("MINSIZE", 50);
    echo MINSIZE;
    echo constant("MINSIZE"); // same thing as the previous line

    $a = 42;
    $b = 20;
    
    $c = $a + $b;
    echo "<br>Addition Operation Result: $c <br/>";
    $c = $a - $b;
    echo "Subtraction Operation Result: $c <br/>";
    $c = $a * $b;
    echo "Multiplication Operation Result: $c <br/>";
    $c = $a / $b;
    echo "Division Operation Result: $c <br/>";
    $c = $a % $b;
    echo "Modulus Operation Result: $c <br/>";
    $c = $a++;
    echo "Increment Operation Result: $c <br/>";
    $c = $a--;
    echo "Decrement Operation Result: $c <br/>";


    ?>
    </h3>
    
</body>
</html>