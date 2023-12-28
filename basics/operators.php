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

//Logical Operators
$n = 12;
$m = 13;
echo "<br>";

if($n == $m){
    echo $n." is equal to ".$m;
}else{
    echo $n." is not equal to ".$m;
}

//AND Operator

$n = 12;
$m = 13;

$o = 32;
$p = 43;

echo "<br>";

if($n == $m && $o == $p){
    echo $n." is equal to ".$m. "  And ".$o." is equal to ".$p;

}else{
    echo $n." is not equal to ".$m. "  And ".$o." is also not equal to ".$p;
}

// OR Operator

$n = 12;
$m = 13;

$o = 32;
$p = 32;

echo "<br>";

if($n == $m || $o == $p){
    echo $n." is equal to ".$m. "  OR ".$o." is equal to ".$p;

}else{
    echo $n." is not equal to ".$m. "  OR ".$o." is also not equal to ".$p;
}

//PreIncreament and PreDecreament Operators
echo "<br>";
echo "PreIncreament and PreDecreament Operators";
echo "<br>";
$z = 2;
echo ++$z;

echo "<br>";
$z = 3;
echo --$z;

//PostIncreament and PostDecreament Operators
echo "<br>";
echo "PostIncreament and PostDecreament Operators";
echo "<br>";
$z = 2;
echo $z++;
echo "<br>";
echo $z;

echo "<br>";
$z = 3;
echo $z--;
echo "<br>";
echo $z;
?>


</body>
</html>