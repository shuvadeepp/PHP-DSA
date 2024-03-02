<?php
$array = [9,5,2,7,3,6,10,8,4,1];
$arrLength = count($array); 
for($i=0;$i<$arrLength -1;$i++){ 
    for($j=0;$j<$arrLength -$i -1;$j++){ 
        if($array[$j] > $array[$j + 1]){
            $serialize_data = $array[$j]; 
            $array[$j] = $array[$j +1]; 
            $array[$j +1] = $serialize_data;
        }
    }
}
echo'<pre> Unsorted Array: ';print_r([9,5,2,7,3,6,10,8,4,1]);
echo'<pre> Sorted Array: ';print_r($array);