<?php
function febonacci($n) {
    $fibonacciSeries = array(0, 1);
    for($i=2;$i<$n; $i++){
        $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }
    return $fibonacciSeries;
}
$result = febonacci(10);
echo "Febonacci Series: " . implode(", ", $result);
// echo'<pre>';print_r($result);
 
