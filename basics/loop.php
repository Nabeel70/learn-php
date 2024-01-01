<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>
    <?php
    //For loop
    for($i = 0; $i<=5; $i++){
        echo "Hi there..! ".$i."<br>";
    }
    //For loop with variable values
    $var = 10;
    for($v=0; $v<= $var; $v++){
        echo "Itration no ... ".$v."<br>";
    }

    //While loop
    
    // $bolean = true;
    // while($bolean){
    //      echo $bolean ."<br>";
    //      echo $bolean."<br>";
    //      $bolean = false;
    // }

    //Checking varibale value in while loop
    $test = 5;
    // while ($test<10){
    //     echo $test."<br>";
    //     $test++;
    // }

    //Do-While loop
    do{
        echo $test,"<br>";
        $test--;
    }while($test>=0);
    
    ?>
    
</body>
</html>