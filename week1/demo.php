Tasks: Configure Default Build Task<?php
/* 
folder address  : c:/xampp/htdocs/week1/demo.php
url             : localhost/week1/demo.php
*/

//we can use "echo" or "print" to display text to webpage

echo "<h1 style='color:darkgreen';>hello \"world\" <br><h1>";
print "<h1>we are studying PHP<h1>";


$a = -5;
if ($a < 0):
?>
    <ul>
        <li>hello</li>
        <li>world</li>
    </ul>
<?php
else:
    echo "a is positive";
endif;


?>