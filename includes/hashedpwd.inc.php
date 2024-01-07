<?php

$pwdSignup = "admin123";

$options = ['cost' => 12];

$hashedpwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);


$pwdLogin = "admin123";

$varify_pwd = password_verify($pwdLogin, $hashedpwd);

if ($varify_pwd){
    echo "Verify password are same";
} else {
    echo "Sorry Password is not correct";
}