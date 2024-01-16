<?php

if($_SERVER['REQUEST_METHOD'] == 'post') {
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    try {
        require_once 'dbh.inc.php';
        require_once '../model/login_model.inc.php';
        // require_once '../view/login_view.inc.php';
        require_once '../controller/login_controller.inc.php';

          //Error Handlers
          $errors = [];

          if(is_input_empty($username, $password, $email)){
             $errors["empty_input"] = "Fill in all fields!";
          }
         
         //Link to config file for start the session
         require_once 'config_session.inc.php';
        
 
         if($errors){
             $_SESSION["errors_signup"] = $errors;
 
             $signup_data = [
                 "username" => $username,
                 "email" => $email
             ];
 
             $_SESSION["signup_data"] = $signup_data;
             
 
             header("Location: ../index.php");
             die();
         } 

    } catch (PDOException $e) {
        echo "Query Failed:  " . $e->getMessage();
    }



}else {
    header("Location: ../index.php");
    die();
}
?>