<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        //prepare parameters
        // $query = "INSERT INTO users (username, pwd, email) 
        // VALUES(?, ?, ?);";

        // $stmt = $pdo ->prepare($query);

        // $stmt->execute([$username,$password, $email]);

        //Named parameters
        $query = "INSERT INTO users (username, pwd, email) 
        VALUES(:username, :pwd, :email);";

        $stmt = $pdo ->prepare($query);

        $options = ['cost' => 12];

        $hashedpwd = password_hash($password, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $hashedpwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        //Close the PDO connection
        $pdo = null;
        $stmt = null;
        header("Location:../../../learn-php/basics/database.php");

        exit();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else{
    header("Location:../../../learn-php/basics/database.php");
}