<?php

/* 

Given an interger array nums, return true if any value appears at least twice in the array and return false. if every element is distinct.

*/

function comtainsDuplicate($nums){
    $nums_unique=array_unique($nums);
    // echo'<pre>';print_r($nums_unique);
    // echo count($nums) .'=='. count($nums_unique);exit;
    if(count($nums) == count($nums_unique)){
        // return false;
        echo 'false';
    } else {
        // return true;
        echo 'true';
    }
}

$arr = [1,2,3,4];
echo comtainsDuplicate($arr);