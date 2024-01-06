<?php
session_start();

$_SESSION["username"] = "Muhammad Nabeel";
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