<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>
    
<?php
    //There are 2 ways to declare or write arrays in PHP
    //1st way to declare
    $cars = array("Tesla", "Honda", "Fraari", "BMW");
    //2nd way to declare
    $fruits = ["Apple", "Banana", "Pineapple", "Cherry"];

    // Here how we can add value in array
    $fruits[] = "Orange";
    // echo $fruits[4];

    //Replace the value "Apple" with the "Kiwi"
    $fruits[0] = "Kiwis";
    // echo $fruits[0];

    //Delete a specific value from the array by using array_splice()  builtin function
    //Here we are deleting value from array 1 to 1
    array_splice($fruits, 1, 1);// We deleted Banana

    echo $fruits[1];

    ?>

</body>
</html>