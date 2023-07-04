<?php

function printN($i) {
    if ($i>=10) {
        return;
    }
    echo $i."\n";

    $i++;
    printN($i);
}

// printN(1);

function printNumber($counter,$end,$stepping=1) {
    if ($counter>$end) {
        return;
    }
    echo $counter."\n";
    $counter+= $stepping;
    printNumber($counter,$end,$stepping);
}

// printNumber(21,37,5);

function fibonacchi($old,$new,$end) {
    static $start;
    $start = $start ?? 1;

    if ($start>$end) {
        return;
    }
    $start++;

    echo $old. " ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacchi($old, $new,$end);
}

fibonacchi(0,1,10);

//// Factorial
echo "\n";
function factorial($n) {
    if ($n<=1) {
        return 1;
    }
    return $n * factorial($n-1);
}
echo factorial(3);