<?php
session_start();
$title = "Insert new employee";
require '../includes/database.php';
// find max id
$query = "SELECT MAX(id) AS max_id FROM employee";
$statement = $pdo->prepare($query);
$statement->execute();

$result = $statement->fetch();

$newId = $result['max_id'] + 1;

if (isset($_POST['insert'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $first_name = trim(strip_tags($first_name));
    $last_name = trim(strip_tags($last_name));
    $email = trim(strip_tags($email));

    $sql = "INSERT INTO employee
            SET     first_name = :first_name,
                    last_name = :last_name,
                    email = :email";
    $statement = $pdo->prepare($sql);

    $statement->bindValue(":first_name", $first_name);
    $statement->bindValue(":last_name", $last_name);
    $statement->bindValue(":email", $email);
    try {
        $statement->execute();
        $_SESSION['status'] = 'insert success'; 
        header("location: ../view/view.php");
        exit;
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) { 
            $_SESSION['status'] = 'insert duplicate'; 
            header("location: insert.php"); 
            exit;
        } else {
            $_SESSION['status'] = 'error';
            header("location: insert.php");
            exit;
        }
    }
    // header("location: insert.php");
} else {
    include 'insert.html.php';
}

$output = ob_get_clean();
include '../templates/layout.html.php';
