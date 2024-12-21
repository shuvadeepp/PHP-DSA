<?php

function findMajorityElement($arr){
 
    $cand=null;
    $totCount=0;
    foreach($arr as $val){ 
 
        if($totCount == 0){
            $cand=$val; 
            $totCount=1;
        } else if($val == $cand){
            $totCount++;
        } else { 
            $totCount--;
        } 
    }
    
    $totCount=0;
    foreach($arr as $val){
        if($val == $cand){
            $totCount++;
        }
    }
 
    return $totCount > floor(count($arr) / 2) ? $cand : null; 
}

// $arr = [3, 3, 4, 2, 3, 3, 3];
$arr = ['India','India','Bangladesh','Pakistan','India','India','Nepal'];
$majorityElement = findMajorityElement($arr);
echo $majorityElement;
 