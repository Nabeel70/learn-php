<?php
 declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User defined funtions in PHP</title>
</head>
<body>
    <?php
    function sayHello(){
        echo "Hello My function";
    }

    // return sayHello();

    //Passing parameters inside functions

    function intro($firstName, $lastName, $fvrtCar){
        echo "Hi I'm ".$firstName ." ". $lastName ."<br> 
        My favourite car is ". $fvrtCar;
    }
    intro("Nabeel", "Amin", "Tesla");

    //Give a default value to parameter and then change it during return the function
    function testIt($name = "Green") {
        echo "Pakistan flag color is " . $name;
    }
    // return testIt();

    // return testIt("Green and White");


    /*  Typed Declaration (Restrict user to have specific type value)*/

    echo "<br>";
    function declr(string $name = "Green") {
        echo "Test string " . $name;
    }
    return declr();
    // return testIt("Green and White");


    ?>
</body>
</html>