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

         //Error Handler
         if(is_input_empty($username, $password, $email)){

         }
         if(is_email_valid($email)){
         }
         if(get_username($pdo, $username)){
        }      
    } catch (PDOException $e) {
        echo "Query Failed:  " . $e->getMessage();
    }

} else {
    header("Location: ../index.php");
    die();
};