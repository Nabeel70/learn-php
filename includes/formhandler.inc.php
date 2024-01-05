<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email) 
        VALUES(?, ?, ?);";

        $stmt = $pdo ->prepare($query);

        $stmt->execute([$username,$password, $email]);

        //Close the PDO connection
        $pdo = null;
        $stmt = null;
        header("Location:../../../learn-php/basics/database.php");

        exit();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

    if(!empty($username && $password && $email)){
        echo "These are the data that user submited: ";
        echo "<br>";
        echo $username;
        echo "<br>";
        echo $email;
        echo "<br>";
    } else{
        echo "<h5>Please Go Back and fill all the fields in the form first</h5>";
    }

} else{
    header("Location:../../../learn-php/basics/database.php");
}