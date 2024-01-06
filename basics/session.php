<?php
session_start();

$_SESSION["username"] = "Muhammad Nabeel";

//Delete just one session
// unset($_SESSION["username"]);

//Delete all sessions
// session_unset();

//Destroy sessions
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions in PHP</title>
</head>
<body>
    <?php
    echo $_SESSION["username"];
    ?>
</body>
</html>