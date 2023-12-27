<?php
// var_dump($_SERVER['HTTP_HOST']);
//Old method
// if(isset($_POST['submit'])){

// };

//Prefered one
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //htmlspecialchars for synthecise data 
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $pet = htmlspecialchars($_POST['favouritepet']);

if(!empty($firstname && $lastname && $pet)){

    echo "These are the data that user submited: ";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $pet;
    
} else {
    echo "<h5>Please Go Back and fill all the fields in the form first</h5>";
}
} else {
header("Location: ../includes/formhandler.php");
};

