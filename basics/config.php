<?php

ini_set('session.use_only_cookies',  1);
//Use strict mode for session(it's mandatory when we want to deals with cookies sessions)
ini_set('session.use_strict_mode',  1);

//Setup session cookie parameters
session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,
]);

//Starting the session
session_start();

