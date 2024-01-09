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
    }
}