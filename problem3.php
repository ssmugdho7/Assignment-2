<?php 
$n = 1;
$a = 0; 
$b = 1; 
// $c = 1; 


echo PHP_EOL;

$limit = 10;
for ($i=1; $i<=$limit+1; $i=$i+1){
    
    if ($n>100){ 
       break;
    }
    else{
            echo $a!=0 ? $n:""; 
            echo "\n";
            $n = $a + $b ; 
            $a = $b; 
            $b = $n;
        }
    }

