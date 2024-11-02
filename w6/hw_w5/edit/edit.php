<?php
session_start();
$title = "Edit author";
require '../includes/database.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $id = trim(strip_tags($id));
    $first_name = trim(strip_tags($first_name));
    $last_name = trim(strip_tags($last_name));
    $email = trim(strip_tags($email));

    $sql = "UPDATE  employee
            SET     first_name = :first_name,
                    last_name = :last_name,
                    email = :email
            WHERE   id = :id;";
    $statement = $pdo->prepare($sql);

    $statement->bindValue(":id", $id);
    $statement->bindValue(":first_name", $first_name);
    $statement->bindValue(":last_name", $last_name);
    $statement->bindValue(":email", $email);
    try {
        $statement->execute();
        $_SESSION['status'] = 'edit success';
        header("location: ../view/view.php");
        exit;
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            $_SESSION['status'] = 'edit duplicate'; 
            header("location: edit.php?id=$id");
            exit;
        } else {
            $_SESSION['status'] = 'error'; 
            header("location: edit.php?id=$id");
            exit;
        }
    }
    // header("location: ../view/view.php");
} else {
    //get current data of author to display on form
    $sql = "SELECT * FROM employee WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":id", $_GET['id']);
    $statement->execute();
    $employee = $statement->fetch();
    include 'edit.html.php';
}

$output = ob_get_clean();
include '../templates/layout.html.php';
