<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant in PHP</title>
</head>
<body>
    <?php
    //Constant in php(Value will not change of constant)

    define("PI", 3.14);
    echo PI;
    echo "<br>";
    define( "Name", "Muhammad Nabeel");
    echo Name;
    echo "<br>";
    define("Is_Admin", true);
    echo Is_Admin;
    echo "<br>";

    function test(){
        echo Name;//We can access the constants in functions without GLobal keyword
    }
    test();
    echo "<br>";

    ?>

</body>
</html>