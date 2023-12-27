<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in PHP</title>
</head>
<body>
    
<?php

    //Strings Operators
    $a = "Hello";
    $b = "World";
    $c = $a . " ". $b;
    echo $c;
    echo "<br>";

    //Arithmatic Operators 
    echo 12 +8;
    echo "<br>";
    echo 10 % 3;
    echo "<br>";
    echo (12 * 23) / (23 +98);
    echo "<br>";

    //Assignment Operator
    $z = 3;
    //Two ways to update value of specific variable
    //1st way

    // $z = $z +7;

    //2nd way(Best way to update)
    $z += 7;

    echo $z;

    //Comparison Operator 
    $a = 9;
    $b = 9;
    echo "<br>";

    //Here we just check weather it is true or not just checking Data
    if ($a == $b){

        echo "A is equal to B";
    }else{
        echo "A is not equal to B";
    }

//Here check weather it is true or not checking Data and Dat types as well by using === signs
    $a = 9;
    $b = "9";
    echo "<br>";

    //Here we just check weather it is true or not
    if ($a === $b){

        echo "A is equal to B";
    }else{
        echo "A is not equal to B";
    }

//Not Operators 
$x = 12;
$y = 12;
echo "<br>";

if($x != $y){
    echo $x."is not equal to ".$y;
}else {
    echo $x." is equal to ".$y;
};

?>


</body>
</html>