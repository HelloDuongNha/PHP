<?php  
// connect to db
include_once "connect_db.php";

// create SQL statement
$sql = "SELECT * FROM joke";

// execute(run) SQL statement and save result to a variable
$jokes = $pdo->query($sql);
?>

<h1>List of joke</h1>
<ol>


<?php
// use foreach loop to display the result
foreach ($jokes as $joke) {
?>

    <li>
        <?= $joke['id']; ?> - <?= $joke['joketext']; ?>  - <?= $joke['jokedate']; ?>
    </li>

<?php
}
?>

</ol>