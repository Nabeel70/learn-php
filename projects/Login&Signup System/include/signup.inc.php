<?php

if($_SERVER ["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $email = $_POST["email"];

    try {

        require_once 'dbh.inc.php';
        require_once '../model/signup_model.inc.php';
        // require_once '../view/signup_view.inc.php';
        require_once '../controller/signup_controller.inc.php';

         //Error Handlers
         $errors = [];

         if(is_input_empty($username, $password, $email)){
            $errors["empty_input"] = "Fill in all fields!";
         }
         if(is_email_invalid($email)){
            $errors["invalid_email"] = "Oops!.. Invalid Email is used";
         }
         if(is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Username is already taken, Please try with different one!";
        } 
        if(is_email_registered($pdo, $email)){
            $errors["email_used"] = "Email already registered!";
        }    
        //Link to config file for start the session
        require_once 'config_session.inc.php';
       

        if($errors){
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
            die();
        } 
        
        create_user($pdo,$password, $username, $email);

        header("Location: ../index.php?signup=success");
        
        $pdo = null;
        $stmt = null;

        die();


    } catch (PDOException $e) {
        echo "Query Failed:  " . $e->getMessage();
    }

} else {
    // header("Location:../../../../calculator.php");
    header("Location: ../index.php");
    die();
};