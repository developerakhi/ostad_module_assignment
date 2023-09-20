<?php

// Task 3: Break on Condition

$n1 = 0;
$n2 = 1;
$n = 10;
echo $n1 . " " . $n2 . " ";

$number = 0;

while ($number < 100) {

    $next = $n1 + $n2;

    if ($number < $n-2) {
        
        echo $next . " ";
    
    }

    $n1 = $n2;
    $n2 = $next;
    
    $number++;

    if ($number > 100) {
        break;
    
    }
}