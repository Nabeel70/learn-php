<?php

if($_SERVER['REQUEST_METHOD'] == 'post') {
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    try {
        require_once 'dbh.inc.php';
        require_once '../model/login_model.inc.php';
        // require_once '../view/login_view.inc.php';
        require_once '../controller/login_controller.inc.php';


    } catch (PDOException $e) {
        echo "Query Failed:  " . $e->getMessage();
    }



}else {
    header("Location: ../index.php");
    die();
}
?>