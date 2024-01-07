<?php 
    function compress_string($str) {
        // echo $str[0];exit;
        $compressed    = "";
        $current_char  = $str[0];
        $current_count = 1;
        for($i=1; $i<=strlen($str); $i++){
            // echo $i; // 123456789101112131415161718
            // echo $str[$i] .'=='. $current_char; // A==AA==AB==AB==AC==AD==AD==AD==AD==AD==AD==AE==AF==AF==AF==AF==AG 
            //echo $str[$i] .'<br>'; //AABBCDDDDDDEFFFFG
            //echo $current_char;  // AAAAAAAAAAAAAAAAAA
            if($str[$i] == $current_char){
                $current_count++;
            } else {
                $compressed .= $current_char.'='.$current_count .','; // A3A3B4A3B4C4A3B4C4D9A3B4C4D9E9A3B4C4D9E9F12
                $current_char = $str[$i];  // BCDEFG
                $current_count = 1;
            }
        }
        echo $compressed;  // A=3B=2C=1D=6E=1F=4G=1
    }

    $string = "AAABBCDDDDDDEFFFFG";
    $compress_string = compress_string($string);
    echo $compress_string;