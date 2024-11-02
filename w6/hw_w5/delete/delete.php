<?php
session_start();
require '../includes/database.php';

    $id = $_POST['id'];
    
    $sql = "DELETE FROM employee WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":id", $id);
    
    if ($statement->execute()) {
        $_SESSION['status'] = 'delete success';
        header("Location: ../view/view.php");
        exit;
    } else {
        $_SESSION['status'] = 'error';
        header("Location: ../view/view.php");
        exit;
    }

?>
