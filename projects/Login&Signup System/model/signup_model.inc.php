<?php
//This will handle with database (Updating, adding, deleting data etc)

declare(strict_types=1);

//Get the username from the database

function get_username(object $pdo, string $username)
{
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//Get the email from the database

function get_email(object $pdo, string $email)
{
    $query = "SELECT username FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//Setup the user to insert signup data into db
function set_user(object $pdo, string $password, string $username, string $email){
    $query = "INSERT INTO users (username, pwd, email) VALUES 
    (:username, :pwd, :email);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedpwd = password_hash($password, PASSWORD_BCRYPT, $options);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedpwd);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
}