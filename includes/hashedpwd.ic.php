<?php

$pwdSignup = "admin123";

$options = ['cost' => 12];

$hashedpwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);


$pwdLogin = "admin123";
password_verify($pwdLogin, $hashedpwd);