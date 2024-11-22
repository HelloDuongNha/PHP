<?php
include "../includes/DatabaseConnection.php";
include "../includes/Functions.php";

deleteDataByID($pdo, "jokes", "joke_id", $_POST['id']);

header("location: ../ADMIN/jokes.php");
?>