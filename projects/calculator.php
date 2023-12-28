<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>PHP Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <label for="number1">Number 1</label>
    <input type="number" name="num1" placeholder="number 1">
    <br>
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <br>
    <label for="number2">Number 2</label>
    <input type="number" name="num2" placeholder="number 2">
    <br>
    <button>Calculate</button>
    </form>
    <?php
    //Checking weather the form submitting method is POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Grab the data from input fields
        $num1 = filter_input(INPUT_POST, "num1",
         FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "num2",
         FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        //Error handlers 
        $errors = false;

        if(empty($num1) || empty($num2) || empty($operator)){
            echo "Fill in all the fields";
            $errors = true;
        };

        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "Only writes numeric values";
            $errors = true;
        };

        //Calculate the numbers if there's no error
        if(!$errors){
            //Declare $val variable so we don't get message in browser
            $val = 0;
            
            switch($operator){
                case "add":
                    $val = $num1 + $num2;
                    break;
                case "subtract":
                    $val = $num1 - $num2;
                    break;
                case "multiply":
                    $val = $num1 * $num2;
                    break;
                case "divide":
                    $val = $num1 / $num2;
                    break;
                default:
                    echo "Oops! Something went Wrong";     
            };
            echo " Results = ". $val. "  .";
        }

    };
    ?>
</body>
</html>