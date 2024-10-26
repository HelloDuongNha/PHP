<?php
// back-end: form1.php

if (!isset($_POST['submit'])) {
    echo "<h1> you must input data first </h1>";
} else {
    $first = $_POST["first_name"];
    $last = $_POST["last_name"];
    $full = $last . " " . $first;
    echo "FULL NAME: " . $full;
}