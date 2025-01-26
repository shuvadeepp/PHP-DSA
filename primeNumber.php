<?php 

// Prime Number:- 

function chkPrime($num){
    // echo $num;
    if($num < 1){
        $res="sorry! cannot get prime number ";
    }else{
        $count=0;
        for($i=1; $i<=$num; $i++){  
            if($num % $i == 0){ 
                $count++; 
            }
        } 
        if($count == 2){
            $res= "Prime number";
        }else {
            $res= "Not prime number";
        }
    }
    return $res;
}
$chkPrime= chkPrime(1);
echo $chkPrime;