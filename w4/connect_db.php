<?php
// NOTE: you must put this code to C:/xampp/htdocs to run

// connect my SQL to PHP using PDO technique
// mysql: db server
// localhost: local sever
// utf8mb4: character set
// root: default database username in Xampp
// 'null': default database password in Xampp

try {
    $pdo = new PDO('mysql:host=localhost; dbname=comp1841; charset=utf8mb4',username: 'root', password: '');
    echo "<h1 style='color: green;'> Connect to DB succeed ! </h1>";
} catch (PDOException $error) {
    echo "<h1 style='color: red;'> Connect to DB failed ! </h1>";
}




?>