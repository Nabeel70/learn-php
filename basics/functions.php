<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP</title>
</head>
<body>
    
    <?php

    //Count the length of string function
    $string = "Hello World";
    echo strlen($string);
    echo "<br>";

    //Know the location/index value of specific character in a string
    $brand = "Apple is a global company";
    echo strpos($brand, "c");
    echo "<br>";

    //Replace the word in a string 
    $greetings = "Welcome to Web Course";
    echo str_replace("Web", "PHP", $greetings);
    echo "<br>";

    //Convert the string into lower case
    $string1 = "Just the random string";
    echo strtolower($string1);
    echo "<br>";

    //Convert the string into upper case
    $string2 = "Check th string to upper";
    echo strtoupper($string2);
    echo "<br>";

    //Get specific indexed values from string
    $string3 = "Hi This is the test string";
    echo substr($string3, 2, -3);
    echo "<br>";

    //Explode the string or add something between characters of string
    $string4 = "Th is is t he test str ing for explode function";
    print_r(explode(" ", $string4));


    ?>
</body>
</html>