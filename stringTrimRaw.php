<?php
// Using for loop trim this string. 

    $var1 = 'Hello World! This is my first programme.'; 
    
    for($i=0; $i<=strlen($var1); $i++){  
        if($i == 12){
        break;
        }
        echo $var1[$i];
    } 