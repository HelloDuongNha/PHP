<?php
$title = "Homepage";
ob_start();
include 'home.html.php';
$output = ob_get_clean();
include '../templates/layout.html.php';
?>