<?php 
function calculateSumDigits($numb){
    $sum=0;
    while ( $numb > 0 ) {
       $digits = $numb % 10;
       $sum += $digits;
       $numb = ($numb / 10);
    }
    return $sum;
}
$cal = 12345678910;
echo calculateSumDigits($cal);