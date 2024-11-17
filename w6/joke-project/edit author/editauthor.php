<?php
include "../includes/Functions.php";
$title = setTitle("Edit author");

//check whether user submits form or not
/* case 1: user already submitted form => take
data through form and add to DB */
if (isset($_POST['edit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $id = $_POST['id'];
      updateAuthor($pdo, $id, $name, $email);
      header("location: ../List authors/authors.php");
} else {
/* case 2: user did not submit form
=> render form for user to submit*/ 
      //get current data of author to display on form
      $author = getDatabyID($pdo, "authors", "author_id", $_GET["id"]);
      include 'editauthor.html.php';
}

$output = ob_get_clean();
include '../templates/layout.html.php';
