<?php
function printFibonacci($count) {
    $previous = 0;
    $current = 1;
    
    for ($i = 0; $i < $count; $i++) {
        echo $current . " ";
        $next = $previous + $current;
        $previous = $current;
        $current = $next;
    }
}

$count = 15;
printFibonacci($count);