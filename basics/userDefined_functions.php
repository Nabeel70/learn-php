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

    ?>
</body>
</html>