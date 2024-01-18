<?php 

    // Prime Number:-
    function primeNum($primeNum){
        
        for($var = 2; $var <= $primeNum; $var++){
            // echo $var; // 2345678910
            for($let = 2; $let < $var; $let++){
                // echo $let.'-'; // 2-2-3-2-3-4-2-3-4-5-2-3-4-5-6-2-3-4-5-6-7-2-3-4-5-6-7-8-2-3-4-5-6-7-8-9-
                if($var % $let == 0){
                    // echo $let;exit;
                    // echo $var;exit;
                    // echo $primeNum;
                    break;
                }
            }
            // echo $var . '==' . $let . ',';  // 2==2,3==3,4==2,5==5,6==2,7==7,8==2,9==3,10==2,
            // if($var == $let){
            //     // echo $var . '==' . $let;
            // }
            if($let == $var){
                echo "Prime number:" . $var . "<br>";   
            }
        }
    }

    $print_prime = primeNum(11);
    // echo $print_prime;