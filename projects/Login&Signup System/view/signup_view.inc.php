<?php
//This will handle with 

declare(strict_types=1);

function check_signup_errors(){
    if(isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach($errors as $error) {
            echo "<h5>".$error."</h5>";
        }

        unset($_SESSION['errors_signup']);
    } else if(isset($_GET["signup"]) && $_GET["signup"] === 
    "success"){
        echo "<br>";
        echo "<h3 style='color:green;'>Signup Success!</h3>";
    }
}