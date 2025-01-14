<?php

function searchElements($elems, $searchElem){

    $index=[];
    for($i=0; $i<=count($elems) -1; $i++){
        // echo $elems[$i],', ';
        if($elems[$i] == $searchElem){
            $index['Position']=$i;
            $index['Element']=$elems[$i];
        }
    } 
    foreach($index as $key => $value){
        echo $key.' : '.$value.'<br>'; 
    }  
} 

$arr = [10, 22, 34, 45, 50, 62, 72, 88, 98];
$find = 72;

$searchElem = searchElements($arr, $find);
echo $searchElem;