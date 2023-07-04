<?php
// copy by value or deep copy
$person = ["fname" => "Hello", "lname" => "World"];
// $newPerson = $person; // copy by value or deep copy
$newPerson = &$person; // copy by refference or shallow copy
$newPerson["lname"] = "Pluto";

// print_r($person);
// print_r($newPerson);

function printData(&$person)
{
  $person["fname"] .= " changed";
  print_r($person);
}
printData($person);
print_r($person);
