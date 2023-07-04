<?php
include_once "isEvenFunction.php";
//// even or odd
$x = 13;

if (isEven($x)==true) { // argument
    echo "{$x} is an even number.";
} else {
    echo "{$x} is an odd number.";
}
//// factorial
echo "\n";
$y = 2;

echo "Factorial of {$y} is ".factorial($y);

//// robot-serve
echo "\n";
$ft = 'Coffee';
$n = "2 cups";
serve($ft,$n);
