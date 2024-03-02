<?php

/* ---------------------------- Search common element in both array CODE: ----------------------------  */  
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

/* pre-defind array func */
$arrIntersec = array_intersect($arr1, $arr2);
echo'<pre>';print_r($arrIntersec);
/* pre-defind array func */

/* using in for loop */
for($i=0; $i<count($arr1); $i++){
    for($j=0; $j<count($arr2); $j++){
      if($arr1[$i] == $arr2[$j]){
        echo $arr1[$i];
      }
    }
  }
/* using in for loop */

/* using in foreach loop */
foreach($arr1 as $elem1){
  foreach($arr2 as $elem2){
    if($elem1 == $elem2){
      echo $elem2;
    }
  }
}
/* using in foreach loop */

/* ---------------------------- Search common element in both array CODE: ----------------------------  */  