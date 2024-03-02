<?php
function oneSideTranglePiramid($n){
    for($i =0; $i<=$n; $i++){
        for($j =0; $j<=$i; $j++){
            // echo"*";
            echo$j;
        }
        echo'<br>';
    }
} 
echo oneSideTranglePiramid(5);