<?php
// ternary operator
$a = 5;
$result = ($a > 0) ? 'Positive' : 'Negative';
echo $result;  // Output: Positive


// if_else-loop alternative syntax
$a = -5;
if ($a < 0): //you can replace {} by ":" and "endif;"
?>
    <ul>
        <li>hello</li>  <!-- you can write any html or css if u want after closing the php -->
        <li>world</li>
    </ul>
<?php
else:
    echo "a is positive";
endif; //remember to close

echo '<br>';

// for-loop alternative syntax
for ($i = 1; $i < 10; $i ++): //you can replace {} by ":" and "endfor;"
    ?>
    <p>hello for <?= $i ?> time</p>     <!--or we can use <?php //echo $i ?> instead-->
    <?php
endfor; //remember to close

echo '<br>';

// while-loop alternative syntax
$i = 1;
while ($i < 10):
    ?>
    <p>hello while <?= $i ?> time</p>    
    <?php
    $i++;
endwhile; //remember to close

echo '<br>';

// for_each-lôp alternative syntax
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as $fruit):
    ?>
    <p><?= $fruit; ?></p>
    <?php
endforeach;
?>