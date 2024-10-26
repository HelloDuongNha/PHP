<?php
$output = "";
include_once "function.php";

if (!isset($_POST['val_a'])) {
    include "form.html.php";

} else {
    $val_a = $_POST['val_a'];
    $val_b = $_POST['val_b'];
    $val_c = $_POST['val_c'];

    if (empty($val_a) || empty($val_b) || empty($val_c)) {
        $output = "<h1 style='
            font-size: 20px;
            color: red;'>
            Please make sure that you fill all the blank, BABY</h1> <br> ";
        include "result.html.php";
        exit;

    } elseif (!is_numeric($val_a) || !is_numeric($val_b) || !is_numeric($val_c)) {
        $output = "<h1 style='
            font-size: 20px;
            color:red;'>
            Invalid Entry, Try again BABY</h1> <br>";
        include "result.html.php";
        exit;
    }

    $output = solve_quadratic($val_a, $val_b, $val_c); 
    include "result.html.php";
}
