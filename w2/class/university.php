<?php
// hide warnings temporarily with error_reporting
error_reporting(0);


//  get parameter values form URL
// $university = $_GET['university'];
// $country = $_GET['country'];



// use html special chars to fix security hole
$university = htmlspecialchars($_GET['university'], ENT_QUOTES, "UTF-8");
$country = htmlspecialchars($_GET['country'], ENT_QUOTES, "UTF-8");

print $university . "-" . $country;