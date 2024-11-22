<?php
include '../includes/Functions.php';

$title = setTitle("Joke List");
//execute (run) SQL and save result to an array
$jokes = GetAllJokes($pdo);

// 
$total = countTableData($pdo, "jokes");

include 'jokes.html.php';
$output = ob_get_clean();
include '../templates/layout.html.php';


// try {
//        include '../includes/Functions.php';
//        $title = setTitle("Admin Joke List");
//        $jokes = allJokes($pdo);

//        $totalJokes = countTableData($pdo, "jokes");

//        ob_start();
//        include '../List jokes/jokes.html.php';
//        $output = ob_get_clean();
// } catch (PDOException $e) {
//        $title = 'An error has occurred';
//        $output = 'Database error: ' . $e->getMessage();
// }

// include 'admin_layout.html.php';
