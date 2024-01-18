<?php
    // Check if this string how many vowels on string. 

    $var1 = 'Hello World! This is my first programme.'; 
    $num = 0; 
    for($i=0; $i<strlen($var1); $i++){ 
        //echo $i;
        $arr = array('a','e','i','u','o');
        //echo $arr[$i] .'=='. $var1;
        //in_array($var1[$i], $arr);
        //echo'<pre>';print_r($arr);
        if(in_array($var1[$i], $arr)){
            $num++;
        } 
    }
    echo $num;