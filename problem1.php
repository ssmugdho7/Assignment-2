<?php

function evenNumbers($numbers){
  if ($numbers%2==0){
    echo "\n";
    return  $numbers;
}
} 

// for loop 

for ($numbers = 1;$numbers<=20;$numbers++){
    echo evenNumbers($numbers); 
    
} 

echo PHP_EOL;

// while loop 

$x = 1;

while($x <= 20) {
    echo evenNumbers($numbers); 
    echo "\n";
    $x++;
} 

echo PHP_EOL;

// do while loop 

$x = 1;

do {
    echo evenNumbers($numbers); 
    echo "\n";
    $x++;
} while ($x <= 20);
?>
