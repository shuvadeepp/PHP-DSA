<?php 
// Center Number
$array = array(5,8,24,23,13,56,24,1,90);
$centeritem = $array[0];
$count = count($array);
$round = $count / 2;
 
    for($i=0; $i< round($round); $i++){
        $centeritem = $array[$i];
 
    }
echo 'The center item of array: ' . $centeritem;



    