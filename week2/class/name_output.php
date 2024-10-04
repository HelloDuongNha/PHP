<?php 
// BE: name.php

// get value from URL by get method
$name = $_GET["name"];
$age = $_GET["age"];
$nationality = $_GET["nationality"];

// display value to web page
echo "Hello baby ". $name . "<br>";
echo "I am ". $age . " years old now ";
echo "and I come from ". $nationality . "<br>";