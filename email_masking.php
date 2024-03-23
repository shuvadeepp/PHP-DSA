<?php

$email = "shuvadeep@gmail.com";

$pos = strpos($email, '@');  
$pos1 = strpos($email, '.');  

$string1 = substr($email, 0, $pos);
$string2 = substr($email, $pos+1);

$revstring3 = strrev($email); 

$revStringPos = strrev(substr($revstring3,0,strpos($revstring3, '.')));
// echo $revStringPos;exit;

function ccMasking($cc, $maskingCharacter,$visible) { // shuvadeep == * == 3
    // echo $cc . "==" . $maskingCharacter . "==" . $visible;exit;
    $maskedPart = str_repeat($maskingCharacter, strlen($cc) - $visible);
    $visiblePart = substr($cc, 0,$visible); // Extract the last 4 digits
    return $visiblePart . $maskedPart;
} 

function ccMasking1($cc, $maskingCharacter,$visible) { // gmail.com==*==3
    // echo $cc . "==" . $maskingCharacter . "==" . $visible;exit;
    $maskedPart = str_repeat($maskingCharacter, strlen($cc) - $visible);
    $visiblePart = substr($cc,-$visible); // Extract the last 4 digits
    return $maskedPart . $visiblePart;
}
$string1mask = ccMasking($string1, '*', 3);
$string2mask = ccMasking1($string2, '*', 3);

echo $string1mask . "@". $string2mask;