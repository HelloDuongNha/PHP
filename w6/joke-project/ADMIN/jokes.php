<?php
// include '../includes/Functions.php';

// $title = setTitle("Joke List");
// //create SQL statement
// $sql = "SELECT *, author_name, author_email, category_name FROM jokes
//        INNER JOIN authors
//        ON jokes.author_id = authors.author_id
//        INNER JOIN categories
//        ON jokes.category_id = categories.category_id";
// //execute (run) SQL and save result to an array
// $jokes = $pdo->query($sql);

// // 
// $total = countTableData($pdo, "jokes");

// include 'jokes.html.php';
// $output = ob_get_clean();
// include '../templates/layout.html.php';


try {
       include '../includes/Functions.php';
       $title = setTitle("Admin Joke List");
       $jokes = GetAllJokes($pdo);

       $total = countTableData($pdo, "jokes");

       ob_start();
       include '../List jokes/admin_jokes.html.php';
       $output = ob_get_clean();
} catch (PDOException $e) {
       $title = 'An error has occurred';
       $output = 'Database error: ' . $e->getMessage();
}

include '../templates/admin_layout.html.php';
