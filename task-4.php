<?php

// Task 4: Fibonacci Series printing using a Function

function fibonacciSeries($n){

    if($n<=1){
        return $n;
    }else {
        return (fibonacciSeries($n-1)+fibonacciSeries($n-2));
    }
}
    for($i=0; $i<15; $i++){
        echo fibonacciSeries($i)." ";
    
    }