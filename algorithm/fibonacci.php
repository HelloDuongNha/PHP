<?php
function fibonacci($n){
    if ($n <= 0) {
        return "Input should be positive integer.";
    } elseif ($n == 0 || $n == 1){
        return $n;
    }
    return fibonacci($n-1) + fibonacci($n-2);
}