<?php
// $name = "Bangladesh";
// $age = 24;
// $codeRun = "Sujon";
// define("PI",3.14159);

// echo 'hello '.$codeRun;
// echo "\n";
// echo "hello $codeRun";
// echo "\n";
// echo "hello {$codeRun}, {$name}\n";
// // echo constant("PI");
// // echo "value of pi = ".PI;
// var_dump($name);
// printf("Hello %s, Your country is %s",strtoupper($codeRun),$name);

// // plus , minus
$number = 12;
$number += + 13;
$n = 7;
$m = $n++;
/* $m = $n; = 7
   $n = $n +1; = 8
 */
$m = ++$n;
/* 
$n = $n +1; = 8
$m = $n; = 8
 */
// echo $m, "\n", $n;

// // number
// $n = 12;
// $o = 017; // samne 0 mane octal
// $h = 0x2B; // ox mane hexadesimal

// printf("The Number is %d and %d and %d \n",$n, $o,$h);
// printf("The binary equivalent of %d is %b \n",1212,1212);
// printf("The hexadecimal equivalent of %d is %X \n",1212,1212);
// printf("The octal equivalent of %d is %o \n",27,27);

// // logical operator
$n = 12;
$m = "12";
// $r = $n + $m;
$r = $m + $n;
// echo "$r";
// echo "\n";
// if ($n % 2 == 0) {
//     echo "$n is an even number";
// } else {
//     echo "$n is an odd number";
// }

// // leap year
/**
 * 1. divisible by 4 ?
 * 2. divisible by 100 ?
 * 3. divisible by 400 ?
 */

 $year = 2018;

 if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "$year is a leap year";
 } else if ($year % 4 == 0 && $year % 100 == 0) {
    echo "$year is not a leap year";
 } else if ($year % 4 == 0) {
    echo "$year is a leap year";
 } else {
    echo "$year is not leap year.";
 }
 echo "\n";
 if ($year % 4 == 0 && ($year %100 !=0 || $year % 400 ==0)) {
    echo "{$year} is a leap year";
} else {
     echo "{$year} is not a leap year";
    
 }
 echo "\n";
 echo ($year % 4 == 0 && ($year %100 !=0 || $year % 400 ==0)) ?  "{$year} is a leap year" :  "{$year} is not a leap year";
 
 


