<?php 
/* :::::::::: Pattern 1 :::::::::: */
echo "<h3>Pattern 1: </h3>";
for($i=0;$i<=5;$i++) {
    for($j=0;$j<=$i; $j++){
        echo " * ";
    }
    echo "<br>";
}
echo "<br>";
/* 
::: OUTPUT :::
*
* *
* * *
* * * *
* * * * *
* * * * * *
::: OUTPUT :::
*/
/* :::::::::: Pattern 1 :::::::::: */

/* :::::::::: Pattern 2 :::::::::: */
echo "<h3>Pattern 2: </h3>";
for($i=5;$i>=0;$i--) {
    for($j=0; $j<=$i; $j++){
        echo " * ";
    }
    echo "<br>";
}
/*
::: OUTPUT ::: 
* * * * * *
* * * * *
* * * *
* * *
* *
*
::: OUTPUT :::
*/
/* :::::::::: Pattern 2 :::::::::: */

/* :::::::::: Pattern 3 :::::::::: */
echo "<h3>Pattern 3: </h3>";
$n=5;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=(2 * $n) -1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo " * ";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";

}
/* 
::: OUTPUT :::
         *         
       * * *       
     * * * * *     
   * * * * * * *   
* * * * * * * * *
::: OUTPUT :::
*/
/* :::::::::: Pattern 3 :::::::::: */

/* :::::::::: Pattern 4 :::::::::: */
echo "<h3>Pattern 4: </h3>";
$n=5;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=(2 * $n) -1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo " * ";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";

}

for($i=$n -1; $i>=1; $i--){
    for($j=1; $j<=(2 * $n) -1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo " * ";
        } else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
/* 
::: OUTPUT :::
         *         
       * * *       
     * * * * *     
   * * * * * * *   
* * * * * * * * *
   * * * * * * *   
     * * * * *     
       * * *       
         *   '
::: OUTPUT :::      
*/
/* :::::::::: Pattern 4 :::::::::: */

/* :::::::::: Pattern 5 :::::::::: */
echo "<h3>Pattern 5: </h3>";
for($i=1;$i<=5;$i++) {
    for($j=1;$j<=$i; $j++){
        echo " * ";
    }
    echo "<br>";
} 

for($i=5;$i>=1;$i--) {
    for($j=1;$j<=$i; $j++){
    echo " * ";
    }
    echo "<br>";
}
/* 
::: OUTPUT :::
*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*
::: OUTPUT :::
*/
/* :::::::::: Pattern 5 :::::::::: */