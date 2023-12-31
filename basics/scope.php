<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope in PHP</title>
</head>
<body>
    <?php 

    //Global Variables
    $global_var = "Hi, This is Global varibale";
    // Using global variable
    echo $global_var;
    echo "<br>";


    //Local Variable Variables
    function myFunction()
    {
        //Define a local variable
        $localvar = "Hi, This is Local varibale";

        //Use Local Variable
        return $localvar; //Local Variable(We 
        // can't use/access it outside of this function)
    }
    echo myFunction();

    ?>
    
</body>
</html>