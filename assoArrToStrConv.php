<?php
$student = [
  "fname" => "Jalal",
  "lname" => "Shah",
  "age" => "15",
  "class" => 8,
  "section" => "B",
];

print_r($student);
echo $student["fname"] . " " . $student["lname"] . "\n";
printf("%s %s \n", $student["fname"], $student["lname"]);
$serialized = serialize($student);

$newStudent = unserialize($serialized);
print_r($newStudent);

//// json e convert kora
$jsondata = json_encode($student);
echo $jsondata;
echo "\n";
$newStudent2 = json_decode($jsondata, true);
print_r($newStudent2);
