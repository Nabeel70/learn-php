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

//Start the session
session_start();

//Create a function for regenrate session id 
function regenrate_session_id(){
    session_regenerate_id();
    $_SESSION['last_regeneration'] = time();
}

//Create If-else statement for regenrate session if not already created
if(!isset($_SESSION['last_regeneration'])){
    regenrate_session_id();
} else{
    $interval = 60 * 30;
    if( time() - $_SESSION['last_regeneration'] >= $interval){
        regenrate_session_id();
    }
}