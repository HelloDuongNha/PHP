<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deleting Post</title>
    </head>
<?php
//  connect to db
require_once "connect_db.php";
//  add style
include "style.html.php";

//  get data from form
if (!isset($_GET['id'])) {
    ?>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        div{
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px black dashed;
            border-radius: 20px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
            width: 500px;
            padding-bottom: 40px;
        }
    </style>
    
        <div>
            <?php
            echo "<p>No post ID specified to DELETE!</p>";
            ?>
            <a href="index.html.php">
                Click Here to Try Again, Baby!
            </a>
        </div>
    <?php
        return;
    }

// get id from delete button (form)
$delete_id = $_GET['id'];
// echo "id = " . $delete_id;

//  creat SQL query to delete joke
$sql = "DELETE FROM posts WHERE id = :id";

// prepare SQL query
$statement = $pdo->prepare($sql);

// bind (pass) real value of "id"
$statement->bindParam(':id', $delete_id);

// execute (run) SQL query
$statement->execute();

// redirect to index page (joke list)
header('location: index.html.php');



?>