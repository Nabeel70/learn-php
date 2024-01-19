<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_only_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httpOnly' => true
]);

//Start the session
session_start();

//Create a function for regenrate session id 
function regenrate_session_id(){
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}




if(isset($_SESSION['user_id'])) {
    if(!isset($_SESSION['last_regeneration'])){
        // regenrate_session_id_loggedin();
    } else{
        $interval = 60 * 30;
        if( time() - $_SESSION['last_regeneration'] >= $interval){
            // regenrate_session_id_loggedin();
        }
    }


} else{
//Create If-else statement for regenrate session if not already created
if(!isset($_SESSION['last_regeneration'])){
    regenrate_session_id();
} else{
    $interval = 60 * 30;
    if( time() - $_SESSION['last_regeneration'] >= $interval){
        regenrate_session_id();
    }
}
}