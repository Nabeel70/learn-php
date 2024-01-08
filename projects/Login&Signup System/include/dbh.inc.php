<?php

$host = "localhost";
$dbname = "php_db";
$dbusername = "root";
$dbpassword = '';

try {
    //PHP data objects   
    $pdo = new PDO("mysql:host = $host; dbname = $dbname",
     $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection Error: " . $e->getMessage());
}