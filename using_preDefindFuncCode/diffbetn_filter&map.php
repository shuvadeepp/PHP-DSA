<?php
function filterEven($value){
  return $value % 2 == 0; 
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$arrfilter = array_filter($arr, "filterEven");
echo'<pre> Array_filter: ';print_r($arrfilter);

$arrfilter = array_map("filterEven", $arr);
echo'<pre> Array_map: ';print_r($arrfilter);