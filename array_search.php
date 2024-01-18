<?php

    $arr = array(
        1 => "PHP",
        2 => "JAVA",
        3 => "MYSQL",
        4 => "JQUERY",
    );
    // print_r($arr);
    $val = "JAVA";
    $key_search = array_search($val, $arr);
    // print_r($key_search);
    // print_r($arr);
    // echo $val;

    foreach ($arr as $key => $val){
        // echo $key;
        // echo $key_search ;
        if($key_search == $key){
            unset($arr[$key]);
        }
    }
    echo'<pre>';print_R($arr);  
