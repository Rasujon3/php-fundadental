<?php
// string to array
// $vegetables = explode(", ", "brinjal, brocolli, carrot, capsicam");
$vegetables = preg_split(
  "/{, |,}/",
  "brinjal, brocolli, carrot, capsicam,potato,onoin,ginger"
);
// delemeter
// var_dump($vegetables);
// echo $vegetables[0];

// array to string
// $vegetables_string = implode(", ", $vegetables);
$vegetables_string = join(", ", $vegetables);
var_dump($vegetables_string);
echo $vegetables_string;
