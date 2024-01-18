<?php 

/* write a program to print table of any number in php */

    function printMultiplicationTable($num){
        for($i=1; $i<=10; $i++){
            $result = $num * $i;
            echo $num . ' x ' . $i . ' = ' . $result . '<br>';
        }
    }
    $print = printMultiplicationTable(2);
    echo $print;

    /* 
    OUTPUT:- 
    2 x 1 = 2
    2 x 2 = 4
    2 x 3 = 6
    2 x 4 = 8
    2 x 5 = 10
    2 x 6 = 12
    2 x 7 = 14
    2 x 8 = 16
    2 x 9 = 18
    2 x 10 = 20
    */