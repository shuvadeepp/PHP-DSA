<?php
function fullPiramid($n){
    $k=2 * $n-2;
    for($i=0; $i<$n; $i++){
        // echo $i;
        for($j=0; $j<$k; $j++){
            echo "&nbsp"; 
        }
        $k=$k-1;
        for($p=0; $p<=$i; $p++){
            echo " * ";
        }
        echo "<br>";
    }
}
echo fullPiramid(5);