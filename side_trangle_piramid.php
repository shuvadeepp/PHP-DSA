<?php
function side_trangle_piramid($n){
    $star = "*";
    $space= "";
    $mid_point = ceil($n / 2);
    // Upper part of the triangle
    for($i=1; $i<=$mid_point; $i++){
      for($j=1; $j<=$i; $j++){
        $space .= $star . " "; 
      }
      $space.="\r\n";
    }
    // Lower part of the triangle
    for($k=$mid_point-1; $k>=1; $k--){
      for($l=1; $l<=$k; $l++){
        $space .= $star . " ";
      }
      $space.="\r\n";
    } 
    return $space;
}
echo side_trangle_piramid(9);