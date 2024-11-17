<?php
include '../includes/Functions.php';
$title = setTitle("Author List");
//create SQL statement
//order by "id" descending => new record display first
$sql = "SELECT * FROM authors ORDER BY author_id DESC";
//execute (run) SQL and save result to an array
$authors = getData($pdo, $sql);

$total = totalJokes($pdo, "authors");

include 'authors.html.php';
$output = ob_get_clean();
include '../templates/layout.html.php';
