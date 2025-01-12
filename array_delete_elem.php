<?php
// array_delete_elem
function deleteElems($arr, $isPosition){
    for($i=0; $i<=count($arr) -1; $i++){
        // echo $arr[$i],', ';
        if($i === $isPosition){
            unset($arr[$i]);
            // $arr[$i] = $arr[$i+1];
        }
    } 
    return $arr;
}

$items = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$pos=3;
$isDeleteElem = deleteElems($items, $pos);
echo'<pre>'; print_r($isDeleteElem);