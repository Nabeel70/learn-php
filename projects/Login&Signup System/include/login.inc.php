<?php

if($_SERVER['REQUEST_METHOD'] == 'post') {
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    try {
        
    } catch (PDOException $e) {
        echo "Query Failed:  " . $e->getMessage();
    }



}else {
    header("Location: ../index.php");
    die();
}
?>