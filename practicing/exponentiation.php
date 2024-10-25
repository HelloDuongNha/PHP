<?php
function power($a, $n) {
    $result = 1;
    for ($i = 0; $i < $n; $i++) {
        $result *= $a;
    }
    return $result;
}

echo '<h1>' .power(2, 3) .'<h1>';  // Output: 8

