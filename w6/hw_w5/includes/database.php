<?php
try {
    $db_host = 'localhost';
    $db_name = 'week5_db';
    $db_username = 'root';
    $db_password = '';

    $pdo = new PDO("mysql:host=$db_host; dbname=$db_name", $db_username, $db_password);
} catch (PDOException $error) {
    ini_set('display_errors', 0);
    $output = "<h1 style='color:red;'>connect to database failed ! </h1>";
    echo $output;
    
?>
<a href="view.php">click here to try again</a>
    <script>
        alert("<?php echo strtoupper(strip_tags($output)) ?>");
    </script>
<?php
}
