<?php
$arr = [100, 50, 40, 55, 43, 10, 5, 4, 11, 77, 62];
$first = $arr[0];
$second = $arr[0];
for($i = 0; $i < count($arr); $i++) {
    //  echo $arr[$i],'< ' $first,;
    if($arr[$i] < $first){
        $second = $first; 
        $first = $arr[$i];
    } else if($second < $arr[$i] && $arr[$i] > $first) {
        $second = $arr[$i];
    }
}
echo $second;