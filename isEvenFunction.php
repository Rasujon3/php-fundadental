<?php
function isEven($n) { // parameter
    if ($n%2==0) {
        return true;
    }
    return false;
}

function factorial(int $n) {
    $result = 1;
    for ($i=$n; $i >1; $i--) { 
        $result *=$i;
    }
    return $result;
}

function serve($foodType = "Coffee", $numberOfItems = "1 cup") { // Optional Parameter
    echo "{$numberOfItems} of {$foodType} has been served.";
}

function sum(int ...$numbers): int {
    $result = 0;
    for ($i=0; $i < count($numbers); $i++) { 
        $result += $numbers[$i];
    }
    return $result;
}

echo sum(5,6,7,8);