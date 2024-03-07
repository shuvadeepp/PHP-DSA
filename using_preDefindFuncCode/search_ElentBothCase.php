<?php

function searchElentBothCase($val){ 
    global $arr2; 
    $search = array_search($val, $arr2);
    if($search == true){
    	echo $val;
    } 
}
$arr1 = [4, 5, 1, 6, 7];
$arr2 = [2, 3, 1, 4, 5];
array_walk($arr1, "searchElentBothCase", $arr2);