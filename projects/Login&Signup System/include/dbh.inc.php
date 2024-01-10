<?php

//Define variables for database connection
$host = "localhost";
$dbname = "php_db";
$dbusername = "root";
$dbpassword = '';

//setup database connection
try {
    //PHP data objects   
    // $pdo = new PDO("mysql:host = $host; dbname = $dbname",
    //  $dbusername, $dbpassword);
     $pdo = new PDO("mysql:host=localhost;dbname=php_db", 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection Error: " . $e->getMessage());
}

