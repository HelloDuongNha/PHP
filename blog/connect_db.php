<?php  
// db connection
try {
    $sb_host = "localhost";
    $db_port = 3306;
    $db_name = "blog";
    $db_user = "root";
    $db_password = "";
    $pdo = new PDO("mysql:host=$sb_host;port=$db_port;dbname=$db_name", $db_user, $db_password);
    // echo "<h1 style='color: green;'> Connect to DB succeed ! </h1>";
    } catch (PDOException $e){
        echo "<h1 style='color: red;'> Connect to DB failed ! </h1>"
        . $e; //dev version 1
}




?>