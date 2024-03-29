<?php

if($_SERVER  ["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    try {
        require_once 'dbh.inc.php';
        require_once '../model/login_model.inc.php';
        // require_once '../view/login_view.inc.php';
        require_once '../controller/login_controller.inc.php';

          //Error Handlers
          $errors = [];

          if(is_input_empty($username, $password)){
             $errors["empty_input"] = "Fill in all fields!";
          }
          $result = get_user($pdo, $username);

          
          if (is_username_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect Username!";
        } elseif (!password_verify($password, $result["pwd"])) {
            $errors["login_incorrect"] = "Incorrect Password!";
        }
         
          // if(is_username_wrong($result)) {
          //   $errors["login_incorrect"] = "Incorrect Username!";
          // }

          // if(is_password_wrong($password, $result["pwd"])) {
          //   $errors["login_incorrect"] = "Incorrect Password!";
          // }


         //Link to config file for start the session
         require_once 'config_session.inc.php';
        
 
         if($errors){
             $_SESSION["errors_login"] = $errors;             
 
             header("Location: ../index.php");
             die();
         } 

         //Create new session id for user to append user id with it for security
         $newSessionId = session_create_id();
         $sessionId = $newSessionId. "_".$result["id"];
         session_id($sessionId);

         $_SESSION["user_id"] = $result["id"];
         $_SESSION["user_username"] = htmlspecialchars($result["username"]);

         $_SESSION['last_regeneration'] = time();

         header("Location: ../index.php?login=success");
         //close the connection
         $pdo = null;
         $stmt = null;

         die();
    } catch (PDOException $e) {
        echo "Query Failed:  " . $e->getMessage();
    }



}else {
  echo"Something Wrong";

    // header("Location: ../index.php");
    die(); 
}
?>