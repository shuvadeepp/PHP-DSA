<?php 

function oddEven($num) {
    if($num % 2 == 0){
        echo $num . ' is a EVEN number';
    } else {
        echo $num . ' is a ODD number';
    }
}

$print = oddEven(2);
echo $print;