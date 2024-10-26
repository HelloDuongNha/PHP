<?php
function solve_quadratic($a, $b, $c) {
    global $output;
    $denta = $b**2 - 4*$a *$c;
    if ($denta > 0) {
        $x1 = (-$b + sqrt($denta)) / (2*$a);
        $x2 = (-$b - sqrt($denta)) / (2*$a);
        $output .= "<h1 style='
            font-size: 20px; 
            color: green;'> 
            Phuong trinh co 2 nghiem phan biet </h1>";
        $output .= "<p style='font-size: 20px;'>x<sub>1</sub> = $x1 <br>";
        $output .= "x<sub>2</sub> = $x2 </p>";

    } elseif ($denta == 0) {
        $x1 = (-$b)/(2*$a);
        $x2 = $x1;
        $output .= "<h1 style='
            font-size: 20px;
            color: green;'> 
            Phuong trinh co nghiem kep </h1>";
        $output .= "<p style='font-size: 20px;'>x<sub>1</sub> = x<sub>2</sub> = $x1 </p>";

    } else {
        $output .= "<h1 style='
            font-size: 20px; 
            color: green;'>
            Phuong trinh vo nghiem, va co 2 nghiem ao </h1>";
        $real = -$b / (2 * $a);
        $imaginary = sqrt(-$denta) / (2 * $a);
        $x1 = " $real + {$imaginary}i";
        $x2 = " $real - {$imaginary}i";
        $output .= "<p style='font-size: 20px;'>x<sub>1</sub> = $x1 <br>";
        $output .= "x<sub>2</sub> =   $x2 </p>";
    }
    return $output;
}
