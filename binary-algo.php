<?php 

// * 0 1 0 1 1 0 1 1 1 0 1 1 1 1 0 1 1 1 1 1 

class Binary {
    public function binaryFun($num) {
        $i = 0;
        $j = 0;
        $k = 2;
        $storeArr = array();
        while ($i < $num) {        // ! check 0 < 10
            if($i == $j) {         // ! 0 = 0 condition true 
                $storeArr[] = 0 . " [ZERO]";   // ! storeed in $storeArr = 0
                $j = $j + $k;      // ! 0 + 2 == 2, 4,6,8
                $k += 1;           // ! 2 + 1 = 3 
            } else { 
                $storeArr[] = 1 . " [ONE]";  // ! if not equal to $i, store 1
            }
            $i += 1;               // ! ++
        }
        echo '<pre>'; print_r($storeArr);
    }
       
}

$solution = new Binary();
$solution -> binaryFun(9);