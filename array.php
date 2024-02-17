<?php 

$array = array(5,8,24,23,13,56,24,1,90);
$centeritem = $array[0];
$count = count($array);
$round = $count / 2;
// $a = round($round);
    for($i=0; $i< round($round); $i++){
        $centeritem = $array[$i];
        // echo $centeritem = $a[$i];
        //    if($count / 2){
        //     echo $count;
        //    }
    }
echo 'The center item of array. ' . $centeritem;

// smallest Array
/* $firstelem = $array[0];

//echo '<pre>';print_r($array);
 
    for($i=0; $i<count($array); $i++){
        // echo $i;
        if($array[$i] < $firstelem){
            //echo $firstelem.'====='.$array[$i].'111';exit;
            $firstelem = $array[$i];
        }
    }
    echo 'smallest no from array is '.$firstelem; */

    