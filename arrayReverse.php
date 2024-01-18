<?php
function reverse($data){
  // print_r($data);
  $len = count($data);
  $flo = floor($len / 2);
    // echo $flo;
  $i = 0;

  while($i < $flo) { 
    // $i--;
    // echo $len; // 1234567891011121314151617181920
    // print_r($data[$i]);
    // return $data[$i];
    $var = $data[$i];
    //echo $var;  // 12345678910
    $data[$i] = $data[$len - $i - 1];
    // echo $data[$i];   // 20191817161514131211
    // echo $data[$len - $i - 1] = $var;
    $data[$len - $i - 1] = $var;
    // echo $data[$len - $i - 1] = $var;

    $i++;
  }
  // print_r($i);
  // $i--;
  // echo $i; // 20
  // echo'<pre>';print_r($data[$i]); 

  print_r( $data);
}

$mynumarray = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$reversedArray = reverse($mynumarray);
 
?>
