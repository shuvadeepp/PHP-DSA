<?php 
// ! Reverse a String: 
// Short way reverse string.
function rev($n) {
	  $revStr = "";
    for($i=strlen($n) -1; $i>=0; $i--){
      $revStr .= $n[$i];
    }
    return $revStr;
}
echo rev("hello");

// * Implement a function to reverse a string without using built-in reverse functions.

    $originalString = "string";
    $reverseString  = "";
    $i = 0; 

    while (isset($originalString[$i])) {
        $i++;   // 012345
    }

    $i--; // 6  

    for(; $i >= 0; $i--) {
        // echo $i; 543210
        $reverseString .= $originalString[$i];  // ggngnignirgnirtgnirts
    } 
    // echo $originalString;
    echo $reverseString;


// using strlen function

$string = "Hello, world!";
$reversedString = "";
$i = strlen($string) - 1;

while ($i >= 0) {
    $reversedString .= $string[$i];
    $i--;
}

echo $reversedString; // Output: !dlrow ,olleH

