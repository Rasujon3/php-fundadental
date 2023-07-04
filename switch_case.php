<?php
$n = -13;
$r = $n % 2;
echo "{$r}";
echo "\n";

switch ($r) {
    case 0:
        echo "{$n} is an even number.";
        break;
    
    default:
        echo "{$n} is an odd number.";
        break;
}

echo "\n";

switch (true) {
    case ($r == 0 && $n > 0):
        echo "$n is a positive even number";
        break;
    case ($r == 1 && $n > 0):
        echo "$n is a positive odd number";
        break;
    case ($r == 0 && $n < 0):
        echo "$n is a negative even number";
        break;
    case ($r == -1 && $n < 0):
        echo "$n is a negative odd number";
        break;
    default:
        echo "$n is not a number.";
        break;
}
echo "\n";

$f = (false || true); // true
$e  = false or true; // ($e = false) or true = $e = false;
var_dump($f,$e);