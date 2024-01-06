<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $userSearch = $_POST["usersearch"];

    try {
        require_once "../includes/dbh.inc.php";

        //Named parameters
        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo ->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);

        $stmt->execute();

        $results = $stmt->fetchAll(pdo::FETCH_ASSOC);

        //Close the PDO connection
        $pdo = null;
        $stmt = null;
        
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else{
    header("Location:../../../learn-php/projects/selectdata.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecting Data PHP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h3>Search Results: </h3>

    <?php
    if(empty($results)){
        echo "<div>";
        echo "<p>Sorry..!There were no Results..!</p>";
        echo "</div>";
    }else{
        foreach($results as $row){
            echo htmlspecialchars($row["username"]);
            echo htmlspecialchars($row["comment_text"]);
            echo htmlspecialchars($row["created_at"]);
        }
    };

    ?>
</body>
</html>