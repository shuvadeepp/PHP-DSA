<?php
 
function leapYear($y){ 
    if(($y%4===0 && $y%100!=0) || $y%400===0){
      echo "leap year";
    } else {
      echo "not leap year";
    } 
}
echo leapYear("2024");