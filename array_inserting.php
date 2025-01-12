<?php

function arrInsert($elems){

    $newElem = 3;
    $isPosition = 2;

    for($i=count($elems) -1; $i>=0; $i--){ 
        if($i>= $isPosition){
            $elems[$i +1] = $elems[$i]; 
            if($i === $isPosition){
                $elems[$i] = $newElem; 
            }
        }
    }
    return $elems;

}

$items = [1, 2, 4, 5, 6, 7, 8, 9];

// using array_splice:-
// array_splice($items, 2, 0, 3); 
// echo'<pre>'; print_r($items);
// end using array_splice

// $updatedArr = arrInsert($items);
// echo'<pre>'; print_r($updatedArr);
