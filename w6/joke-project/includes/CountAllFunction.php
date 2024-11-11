<?php  
require "DatabaseConnection.php";

function totalJokes($pdo, $table) {
    $sql = "SELECT COUNT(*) FROM " . $table;
    $statement = $pdo->prepare($sql);
    // -- $statement->bindParam(":table", $table);
    $statement->execute();
    $row = $statement->fetch();
    return $row[0];
};





?>