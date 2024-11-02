<?php
$title = "Employee list";
ob_start();
include '../includes/database.php';

$query = "SELECT * FROM employee";
$employees = $pdo->query($query);

include 'view.html.php';
$output = ob_get_clean();
include '../templates/layout.html.php';
