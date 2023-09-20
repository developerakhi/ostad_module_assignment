<?php

// Task 1: Looping with Increment using a Function
    // Using a for loop
    function printEvenNumbersFor($start, $end, $step) {
        for ($i = $start; $i <= $end; $i += $step) {
            echo $i . ' ';
        }
        echo "\n";
    }

    printEvenNumbersFor(2, 20, 2);

    // Using a while loop
    function printEvenNumbersWhile($start, $end, $step){
        $i = $start;
        while($i <= $end){
            if($i % 2 == 0){
                echo $i . ' ';
        }
        $i += $step;
        }
        echo "\n";
    }
    printEvenNumbersWhile(1, 20, 2);

    // Using a do-while loop
    function printEvenNumbersDoWhile($start, $end, $step) {
        $i = $start;
        do {
            if ($i % 2 == 0) {
                echo $i . ' ';
            }
            $i += $step;
        } while ($i <= $end);
        echo "\n";
    }
    printEvenNumbersDoWhile(1, 20, 2);