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

    ?>
</body>
</html>