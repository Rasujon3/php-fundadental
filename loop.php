<?php
for ($i=0; $i < 10; $i++) { 
    // echo $i;
    echo PHP_EOL;
    for ($j=0; $j < $i; $j++) { 
        echo "*";
    }
}
echo "\n";
$i=0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}
echo "\n";
echo "Do While Loop";
echo "\n";
$i=0;
do {
    $i++;
    echo $i.PHP_EOL;
} while ($i < 10);

echo "\n";
echo "Go To Loop";
echo "\n";
$i=0;
a: $i++;
echo $i.PHP_EOL;
if ($i<10) goto a;

//// Multiple Stepping:
for ($i=10,$j=1; $i > 0; $i--,$j++) { 
    // echo $i.":".(11-$i);
    echo $i.":".($j);
    echo PHP_EOL;
}
//// Factorial
$n=6;
for ($i=$n, $factorial=1; $i >1 ; $i--) { 
    $factorial = $factorial * $i;
}

printf("Factorial of %d is %d",$n,$factorial);