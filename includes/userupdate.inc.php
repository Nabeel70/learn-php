<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        //Named parameters
        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 5;";

        $stmt = $pdo ->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $password);
        $stmt->bindParam(":email", $email);

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