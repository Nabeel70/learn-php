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
    // echo $global_var;
    echo "<br>";


    //Local Variable Variables
    function myFunction()
    {
        //Define a local variable
        $localvar = "Hi, This is Local varibale";

        //Use Local Variable
        return $GLOBALS["global_var"];
        echo "<br>";
        return $localvar; //Local Variable(We 
        // can't use/access it outside of this function)
    }
    // echo myFunction();

    /*Static Variable(Use to store the old value of 
    funtion and add next value to it when call the function again) */
    function staticFunction()
    {
        //Declare a static variable
        static $staticvar = 0;

        //Increment the static variable value
        $staticvar++;

        //Use the static variable
        return $staticvar;
    }
    echo staticFunction();
    echo "<br>";
    echo staticFunction();
    echo "<br>";
    echo staticFunction();
    echo "<br>";
    echo staticFunction();
    echo "<br>";



    //Class Scope in PHP
    class myClass
    {
        //Define a class variable(By using static we can access it outside the class scope)
        static public $testvari = "This value is inside a class variable";

        //Define a class method
        public function testfunction()
        {
            //Use the class variable
            echo $this-> testvari;

        }
    };
    echo myClass::$testvari;


    ?>
    
</body>
</html>