<?php 

function trangle_pyramid($n){ 
    $k=2 * $n -2; // 8
    for($i=0; $i<$n; $i++){
      // echo $i; // 01234
      for($j=0; $j<$k; $j++){
        // echo $j; //0 1 2 3 0 1 0 0 
        echo " "; 
        
      }
        $k=$k-1;  //  7 6 5 4 3 2 1 0
      for($p=0; $p<=$i; $p++){
          // echo $p; // 01234 01234 01234 01234 01234 01234 01234 01234
          echo "* ";
        }
        echo "\n";
    }
    
  }
  echo trangle_pyramid(5);

  /* 
        * 
       * * 
      * * * 
     * * * * 
    * * * * * 

  */