<?php 

    function is_palindrome($input) {

        // echo $input;exit;
        $length = strlen($input);
        // echo $length - 1;
        $reverse = "";
        for($i=$length; $i >= 0; $i--) {
            // print_r($input[$i]);
            $reverse .= $input[$i];
        }
        // echo $reverse;exit;
        // echo $input .' == '. $reverse;
        if($input == $reverse){
            echo $reverse . " Is palindrome Number";
        } else {
            echo $reverse . " Is not palindrome Number";
        }
    }
    echo is_palindrome("545");