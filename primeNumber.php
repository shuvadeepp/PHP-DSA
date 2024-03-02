<?php 

    // Prime Number:-
    function primeNum($primeNum){
        
        for($var = 2; $var <= $primeNum; $var++){ 
            for($let = 2; $let < $var; $let++){ 
                if($var % $let == 0){ 
                    break;
                }
            } 
            if($let == $var){
                echo "Prime number:" . $var . "<br>";   
            }
        }
    }

    $print_prime = primeNum(13); 