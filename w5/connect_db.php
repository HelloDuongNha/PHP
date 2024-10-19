<?php
// default db(mySQL) port is 3306

// old way:
// try {
//     $pdo = new PDO('mysql:host=localhost; port=3306; dbname=week4; charset=utf8mb4', 'root', '');
//     echo "<h1 style='color: green;'> Connect to DB succeed ! </h1>";
// } catch (PDOException $e){
//     echo "<h1 style='color: red;'> Connect to DB failed ! </h1>" . $e; //dev version 1
//     // $output = "Unable to connect to the database server: " . $e->getMessage(); //dev version 2
//     // $output = "Unable to connect to the database server: "; //public version
// }



// new way:
try {
    $sb_host = "localhost";
    $db_port = 3306;
    $db_name = "week4";
    $db_user = "root";
    $db_password = "";
    $pdo = new PDO("mysql:host=$sb_host;port=$db_port;dbname=$db_name", $db_user, $db_password);
    // echo "<h1 style='color: green;'> Connect to DB succeed ! </h1>";
    } catch (PDOException $e){
        echo "<h1 style='color: red;'> Connect to DB failed ! </h1>"
        . $e; //dev version 1
}


?>