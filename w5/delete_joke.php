<?php  
//  connect to db
require_once "connect_db.php";

// get id from delete button (form)
$delete_id = $_GET['id'];
echo "id = " . $delete_id;

//  creat SQL query to delete joke
$sql = "DELETE FROM jokes WHERE id = :id";

// prepare SQL query
$statement = $pdo->prepare($sql);

// bind (pass) real value of "id"
$statement->bindParam(':id', $delete_id);

// execute (run) SQL query
$statement->execute();

// redirect to index page (joke list)
header('location: index.php');



?>