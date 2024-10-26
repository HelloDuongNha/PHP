<?php
if (!isset($_POST['submit'])) {
    echo "<h1> you must input data first </h1>";
    echo "<a href='form2.html'> CLick Here to LOgin Baby</a>";
} else {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // check login info:
    if ($email == "admin@gmail.com" && $password == "1234") {
        echo "<b style = 'color:green; font-size: 50'> Welcome</b>" . ", " .  "<b style = 'color = pink; font-size: 100;'>BABY!</b>";
    } else {
        echo "<h1 style = 'color=red;'> Invalid login info BABY</h1>";
        }
}