<?php
try {
    include "../includes/Functions.php";
    $title = setTitle("edit new joke");
    
    if (isset($_POST['edit_joke'])) {
        $id = $_POST["joke_id"];
        $text = $_POST["joke_text"];
        $author = $_POST["author_id"];
        $category = $_POST["category_id"];
        $date = date('l, F j, Y');
        updateJoke($pdo, $id, $text, $author, $category, $date);
        header("location: ../ADMIN/jokes.php");
    
    } else {
        $joke = getDatabyID($pdo, "jokes", "joke_id", $_GET["id"]);
        $authors = getAllDataFromTable($pdo, "authors");
        $categories = getAllDataFromTable($pdo, "categories");
        include '../edit joke/editjoke.html.php';
    }
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}

include '../ADMIN/admin_layout.html.php';