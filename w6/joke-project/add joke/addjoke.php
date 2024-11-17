<?php
$title = "add new joke";
ob_start();
include "../includes/DatabaseConnection.php";
include "../includes/Functions.php";

if (isset($_POST['add_joke'])) {
    $joke_text = $_POST["joke_text"];
    $author = $_POST["author_id"];
    $category = $_POST["category_id"];
    $date = date('l, F j, Y');
    $query = "INSERT INTO jokes (joke_text, joke_date, author_id, category_id) VALUES(:text, :date, :author, :category)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(":text", $joke_text);
    $statement->bindValue(":date", $date);
    $statement->bindValue(":author", $author);
    $statement->bindValue(":category", $category);

    $statement->execute();
    header("location: ../List jokes/jokes.php");
} else {
    $sql1 = "SELECT * from authors";
    $authors = $pdo->query($sql1);

    $sql2 = "SELECT * from categories";
    $categories = $pdo->query($sql2);

    include 'addjoke.html.php';
}

$output = ob_get_clean();
include '../templates/layout.html.php';