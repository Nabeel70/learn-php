<?php
//This will handle with 

declare(strict_types=1);

function signup_inputs() {

    <input type="text" name="username" placeholder="Username">
     <input type="password" name="pwd" placeholder="Password">
    <input type="text" name="email" placeholder="Email">
    <button class="btn-signup">Signup</button>

    if(isset($_SESSION["signup_data"]["username"]) &&
     isset($_SESSION["errors_signup"]["username_taken"]){

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