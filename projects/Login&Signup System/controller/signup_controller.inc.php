<?php
//This will handle with take the user data and check or handle that

declare(strict_types=1);

//Checking if the fields are empty or not
function is_input_empty(string $username,string $password,string $email){
    if(empty($username) || empty($password) || empty($email)){
        return true;
    }else {
        return false;
    }

}

//Check the validation of the email
function is_email_valid(string $email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    return true;
    } else{
    return false;
    }
}

//Check if the username is already taken or not
function is_username_taken(object $pdo, string $username)
{
    if(get_username($pdo, $username)){
    return true;
    } else{
    return false;
    }
}

//Check if the email is already registered or not
function is_email_registered(object $pdo, string $email)
{
    if(get_email($pdo, $email)){
    return true;
    } else{
    return false;
    }
}
