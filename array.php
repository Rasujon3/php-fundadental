<?php
$students = ['rahim','karim',123,'manir'];

// echo $students[2];
// echo "\n";
// echo count($students);
// echo "\n";

// Immutable (modify kora jay na, অপরিবর্তনীয়)
// Mutable (modify kora jay, পরিবর্তনযোগ্য )

$students[2]="sujon";

$n=count($students);
for ($i=0; $i < $n; $i++) { 
    echo $students[$i]."\n";
}

// $student = array_shift($students);
$students[] = "jamal";
array_push($students, "Kamal");
array_unshift($students, "Sujon");
// echo "poped element: ".$student."\n";
echo "\n";
echo "After pop:";
echo "\n";

$n=count($students);
for ($i=0; $i < $n; $i++) { 
    echo $students[$i]."\n";
}



// for ($i=$n-1; $i >= 0; $i--) { 
//     echo $students[$i]."\n";
// }

// array_shift(); // remove from start
// array_unshift(); // insert
// array_pop(); // remove form end
// array_push(); // insert from end
