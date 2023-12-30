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
    echo "<br>";

    //Get absolute value of certain function
    $number = -5.5;
    echo abs($number);
    echo "<br>";

    //Round off value function 
    $number1 = 23.5;
    echo round($number1);
    echo "<br>";

    //Exponential power function
    echo pow( 2, 5);
    echo "<br>";

    //square root of a number
    echo sqrt(39);
    echo "<br>";

    //Get random number between a numbers(It
    // is using to reload images when we refresh a website)
    echo rand(1, 100);
    echo "<br>";

    /*Array 
    functions*/

    //Count the data in array 
    $array = ["Phones", "TV", "Computers", "Tablets"];
    echo count($array);
    echo "<br>";

    //Check weather it's an array or not
    echo is_array($array); //output should be 1(means True)
    echo "<br>";

    //Array Push and pop functions for add or delete data from arrays
    $countries = ["pakistan", "UK", "USA", "Qatar", "Kuwait", "Saudi-Arabia"];
    array_push($countries, "Canada");
    print_r($countries);
    echo "<br>";

    array_pop($countries);
    print_r($countries);
    echo "<br>";

    //Reverse arrays
    print_r(array_reverse($countries));
    echo "<br>";

    //Merging arrays in each others
    print_r(array_merge($array, $countries));
    echo "<br>";

    
    ?>
</body>
</html>