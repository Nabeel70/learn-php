<?php

declare(strict_types=1);

function check_login_errors(){
    $errors = $_SESSION["errors_login"];

    echo "<br>";

    foreach($errors as $error){
        echo '<p>'.$error.'</p>';
    }

    unset($_SESSION["errors_login"]);
}
