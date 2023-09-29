<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $intvar =  420;
    echo "This is integer: ";
    echo $intvar;
    

    echo "<br>";
    define("message", "This is constant: ");
    define ("nice", 69);
    echo message;
    echo nice; 

    echo "<br>";
    echo "This is integer with operations: ";
    $a =  $intvar + 1;
    echo $a;

    echo "<br>";
    $dvar =  10.1;
    echo "This is double: ";
    echo $dvar;

    echo "<br>";
    $isNice = true;
    if ($isNice) {
        echo "This is nice!(This is for the usage of the boolean variable.)\n";
    } else {
        echo "Not nice.\n";
    }
    ?>

</body>
</html>