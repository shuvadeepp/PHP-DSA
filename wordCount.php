<?php 

function wordCount($word){
    $word = strtolower($word);
    $cleanString = preg_replace('/[^a-z]/', ' ', $word);
    // $words = trim($cleanString);
    $arr = explode(' ', $cleanString);
    $wordCount = array_count_values($arr);
    return $wordCount;
}
$str = "Hello World, This is PHP Code. PHP";
$funcCall = wordCount($str);
echo'<pre>';print_r($funcCall);