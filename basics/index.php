<!DOCTYPE html>
<html lang="en">
    <?php
    //This line of code will help us to auto refresh the Webpage in Browser
    header("refresh:1; ");
     ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP 2023-24</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="para">Basics of PHP</h1>
    <p>Here We'll learn basic stuff of Get started with PHP</p>
    <?php
    /*This is the multiline Comment */
    // echo "<h1>This is the basic echo tag for php</h1>";

    //Variables
    $x= 3208;
    $name = "Muhammad Nabeel<br>";
    echo $name;
    // echo $x;
    //Scalar DatTypes
    $string = "Hey, This is the first string value";
    $int = 12;
    $float = 0.2389;
    $sum= $float + $int;
    $bool= true;
    echo "This is the combination of String ". $string." and float,int values sums is ". $sum;

    // Array DataTypes
    /*
    We have 2 methods for declaring arrays
    1st method   */
    $nameArray= array("Nabeel", "Aqeel", "Israr", "Shahroz");
    // 2nd method
    $carArray = ["Tesla", "Honda", "KIA", "MG"];
    echo"<br>". $carArray[1];
    echo"<br>". $nameArray[2];

    // $names = "";
    // $array = [];
    // $bool = false;
    // $object = null;

    //Objects
    // $Car = "Honda Civic";
    // $object = new $Car();


    //SuperGlobal Variables
    //These are the variables which is predefined in the language and we can access it anywhere in the code;
    echo "<p class=para>Global Variables</p>";
    echo "<br>";
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    echo $_GET["name"];
    ?>
</body>
</html>