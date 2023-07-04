<?php
// $name = "Earth"; // global scope

// function doSomething() {
//     // global $name;
//     // echo $name;
//     echo $GLOBALS['name'];
// }

// doSomething();


// function doSomething() {
//     global $name;
//     $name = "Earth"; // local scope
    
// }

// doSomething();
// echo $name;

function doSomething() {
    static $i; // static scope (hold on previous value)
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n"; 
}

doSomething();
doSomething();
doSomething();