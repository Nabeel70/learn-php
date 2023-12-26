<?php
var_dump($_SERVER['HTTP_HOST']);
//Old method
// if(isset($_POST['submit'])){

// };

//Prefered one
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //htmlspecialchars for synthecise data 
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $pet = htmlspecialchars($_POST['favouritepet']);



    echo "These are the data that user submited: ";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $pet;
    // echo "<br>";
    header("Location: ../form.php");
    if(empty($firstname)){
        exit();
        header("Location: ../index.php");
    };
};