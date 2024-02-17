<?php 

/* MATRIX NUMBER */
for($i=1; $i<=6; $i++){
    echo $i;
    if($i % 3 == 0){
        echo '<br>';
    }
}

    /* 
        OUTPUT: 
        123
        456
        789
    */

    for( $i = 1; $i <=4; $i++ ) {
        // echo $i;  // 1234
        $i1 = $i + 4; // 5678
        $i2 = $i1 + 4; // 9101112
        echo  $i . ' ' . $i1 . ' ' . $i2 . '<br>'; 
    }
    /* Logic is 1+4=5, 5+4=9 */
    /* 
        OUTOUT:-
            1 5 9
            2 6 10
            3 7 11
            4 8 12
    */
