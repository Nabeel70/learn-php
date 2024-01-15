<?php
//This will handle with 

declare(strict_types=1);

//Keeping the form data if user make an error 
function signup_inputs() {

    if(isset($_SESSION["signup_data"]["username"]) &&
     isset($_SESSION["errors_signup"]["username_taken"])){
        echo '<input type="text" name="username" placeholder="Username" 
        value = "'. $_SESSION["signup_data"]["username"].'">';
    }else {
        echo '<input type="text" name="username" placeholder="Username">';
    }
    echo ' <input type="password" name="pwd" placeholder="Password">';

    
    if(isset($_SESSION["signup_data"]["email"]) &&
     isset($_SESSION["errors_signup"]["email_used"])  &&
     isset($_SESSION["errors_signup"]["invalid_email"])){
        echo ' <input type="text" name="email" placeholder="Email" 
        value = "'. $_SESSION["signup_data"]["email"].'">';
    }else {
        echo ' <input type="text" name="email" placeholder="Email">';
    }

}



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
        echo "<h3 style='color:green;'>Signup is Success!</h3>";
    }
}