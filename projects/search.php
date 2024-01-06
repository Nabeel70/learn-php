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

<section>
    <h3>Search Results: </h3>

    <?php
    if(empty($results)){
        echo "<div>";
        echo "<p>Sorry..!There were no Results..!</p>";
        echo "</div>";
    }else{
        foreach($results as $row){
            echo "<div>";
            echo "<h4>". htmlspecialchars($row["username"]). "</h4>";
            echo "<p>". htmlspecialchars($row["comment_text"]). "</p>";
            echo "<h4>". htmlspecialchars($row["created_at"])."</h4>";
            echo "</div>";
        }
    };

    ?>

</section>
</body>
</html>