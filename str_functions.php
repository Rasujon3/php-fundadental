<?php
$str = "Hello World!";
echo $str . "\n";
echo chop($str,"World!");

echo "\n";
$str = "Hello world!";
echo chunk_split($str,2,",");

echo "\n";
$name = ['Ruhul','Amin','Sujon'];
echo join(" ",$name);

echo "\n";
$str = "Sujon";
echo md5($str);

$str = "Ruhul Amin";
echo $str . "\n";
echo rtrim($str,"Amin");