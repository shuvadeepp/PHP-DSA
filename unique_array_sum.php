<?php

/* using pre-defind function : */

// $arr = [1,3,2,3,2,4];
// $unique=array_unique($arr);
// $toSum=array_sum($unique);
// print_r($toSum);

/* using array_map pre-defind function : */

// $arr = [1,3,2,3,2,4];
// $unique=array_unique($arr); 
// $total=0;
// array_map(function($num) use (&$total){
//     return $total+=$num;
// }, $unique);
 
// print_r($total);

// another way to using array_map function

$arr = [1,3,2,3,2,4]; 
function get_unique($param){
    static $cal=0; 
    $cal+=$param;
    return $cal;
}
 
$unique=[];
foreach($arr as $val){
    if(!in_array($val, $unique)){
        $unique[]=$val; 
    }
} 
array_map("get_unique", $unique);

// print_r(get_unique(0));

/* without using pre-defind function : */

// $arr = [1,3,2,3,2,4];
// $unique=[];
// $total=0;

// foreach($arr as $sum){
//   if(!in_array($sum, $unique)){
//     $unique[]=$sum;
//     $total+=$sum;
//   }
// }
// echo $total;