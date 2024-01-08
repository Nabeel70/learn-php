<?php

if($_SERVER ["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $email = $_POST["email"];

    try {

        require_once 'dbh.inc.php';
        
        
    } catch (PDOException $e) {
        echo "Query Failed:  " . $e->getMessage();
    }

} else {
    header("Location: ../index.php");
    die();
};