<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["pwd"];


    try {
        require_once "dbh.inc.php";

        //Named parameters
        $query = "DELETE FROM users WHERE username = :username AND 
        pwd = :pwd;";

        $stmt = $pdo ->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $password);

        $stmt->execute();

        //Close the PDO connection
        $pdo = null;
        $stmt = null;
        header("Location:../../../learn-php/basics/dbform.php");

        exit();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else{
    header("Location:../../../learn-php/basics/dbform.php");
}