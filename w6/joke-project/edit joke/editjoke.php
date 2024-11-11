<?php
$title = "edit new joke";
ob_start();
include "../includes/DatabaseConnection.php";

if (isset($_POST['edit_joke'])) {
    $id = $_POST["joke_id"];
    $joke_text = $_POST["joke_text"];
    $author = $_POST["author_id"];
    $category = $_POST["category_id"];
    $date = date('l, F j, Y');
    $query = "UPDATE jokes
                SET joke_text = :text,
                    joke_date = :date,
                    author_id = :author,
                    category_id = :category
                WHERE joke_id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(":text", $joke_text);
    $statement->bindValue(":date", $date);
    $statement->bindValue(":author", $author);
    $statement->bindValue(":category", $category);
    $statement->bindValue(":id", $id);

    $statement->execute();
    header("location: ../List jokes/jokes.php");

} else {
    $id = $_GET["id"];
    $sql = "SELECT * FROM jokes WHERE joke_id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $joke = $statement->fetch();
    $sql1 = "SELECT * from authors";
    $authors = $pdo->query($sql1);

    $sql2 = "SELECT * from categories";
    $categories = $pdo->query($sql2);
    include 'editjoke.html.php';
}

$output = ob_get_clean();
include '../templates/layout.html.php';