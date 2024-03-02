<?php 
$array = array(5,8,24,23,13,56,2,24,1,90);

$smallest_element = $array[0];   // 5

    for($i=0; $i<count($array); $i++){ 
        if($array[$i] < $smallest_element){ 

            $smallest_element = $array[$i];
        }
    }

echo 'Smallest no from array is: ' . $smallest_element; 