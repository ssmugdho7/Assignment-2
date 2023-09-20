<?php 
$n = 1;
$a = 0; 
$b = 1; 
// $c = 1; 


echo PHP_EOL;
 

function fibonacciPrint($limit){

    for ($i=1; $i<=$limit+1; $i=$i+1){
        global $n;
        global $a;
        global $b;
       
    
        echo $a!=0 ? $n:""; //To prevent an extra 1 in the output 
        echo "\n";
        $n = $a + $b ; 
        $a = $b; 
        $b = $n;
    
    }
    
}

fibonacciPrint(15);