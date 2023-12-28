<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions PHP</title>
</head>
<body>
    <?php

    //If-Else statement

    $bool = false;
    $a = 1;
    $b = 2;

    if($a < $b && $bool){
        echo "First condition is true and boolean is true";
    }
    elseif($a < $b && !$bool){
        echo "First condition is true and boolean is not true";
    }
    else {
        echo "First&2nd conditions is false";
    }

    //Switch conditions
    
    echo "<br>";
    $a = 223;

    switch ($a){
        case 8:
            echo "The first condition is true";
            break;
        case 2:
            echo "The second condition is true";
            break;
        case 223:
            echo "The third condition is true";
            break;
        default:
            echo "All conditions are false";
    }

    //Match condition(This Only works in > PHP7 versions)
    echo "<br>";
    $a = 12;

    $result = match($a){
        12 => "Variable is equal to one",
        2 => "Variable is not equal to",
        default => "Variable is not equal to one or two",
    };
    echo $result;

    ?>
</body>
</html> 