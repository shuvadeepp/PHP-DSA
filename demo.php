<?php


// $n=5;
// for($i=1; $i<=$n; $i++){
//     for($j=1; $j<=$n; $j++){
//         if($i==$j || $i+$j==$n+1){
//             echo $j;
//         } else {
//             echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
//         }
//     }
//     echo "<br>";
// }

// $n=5;
// for($i=0;$i<$n;$i++){
//     for($j=0;$j<(2*$n);$j++){
//         if($j>=$n-($i-1) && $j<=$n+($i-1)){
//             echo $j;
//         } else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }
// for($i=$n; $i>=0; $i--){
//     for($j=0;$j<(2*$n);$j++){
//         if($j>=$n-($i-1) && $j<=$n+($i-1)){
//             echo $j;
//         } else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }

// $n=5;
// for($i = 1; $i <$n; $i++) {
//     for($j = 1; $j <(2 * $n); $j++) {
//         if($j>=$n-($i-1) && $j<=$n+($i-1)){
//             echo $j;
//         } else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }
// for($i=$n; $i>=1; $i--) { 
//     for($j = 1; $j<(2 * $n); $j++) {
//         if($j>=$n-($i-1) && $j<=$n+($i-1)){
//             echo $j;
//         }else {
//             echo "&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }


// for($i=0;$i<5;$i++) {
//     for($j=0;$j<$i;$j++) {
//         echo "*";
//     }
//     echo "<br>";
// }
// for($i=5;$i>0;$i--) {
//     for($j=0;$j<$i;$j++) {
//         echo "*";
//     }
//     echo "<br>";
// }

  



// for($i=0; $i<5; $i++){
//     for($j=0; $j<$i; $j++){
//       echo "*";
//     }
//     echo "<br>";
//   }
//   for($i=5; $i>=0; $i--){
//     for($j=0; $j<$i; $j++){
//         echo "*";
//     }
//     echo "<br>";
//   }

// $arr = [7, 12, 9, 4, 11];
// $small = $arr[0];
// for($i = 1; $i <count($arr); $i++){
//     if($arr[$i] < $small){
//         $small = $arr[$i];
//     }
// }
// echo $small;
// function fibonacci($n){
//     $arr=[0, 1];
//     for($i=2; $i<$n; $i++){
//         $arr[$i] = $arr[$i-1] + $arr[$i-2];
//     }
//     return $arr;
// }
// echo'<pre>';print_r(fibonacci(10));
// for($i=0; $i<=5; $i++){
//     for($j=0; $j<=$i; $j++){
//         echo "*";
//     }
//     echo "<br>";
// }
// for($i=5; $i>=0; $i--){
//     for($j=0; $j<=$i; $j++){
//         echo "*";
//     }
//     echo "<br>";
// }

/* $n=5;
for($i=0; $i<=$n; $i++) {
    // echo $i . "<=" . 2*$n,', ';
    for($j=0; $j<=(2*$n) -1; $j++) {
        // echo $j . "<=" . 2*$n,'<br> '; 
        if($j >= $n - ($i-1) && $j <= $n + ($i-1)) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
} */

// $arr = [100, 50, 40, 55, 43, 10, 5, 4, 11, 77, 62];
// $first = $arr[0];
// $second = $arr[0];
// for($i = 0; $i < count($arr); $i++) {
//     //  echo $arr[$i],'< ' $first,;
//     if($arr[$i] < $first){
//         $second = $first; 
//         $first = $arr[$i];
//     } else if($second < $arr[$i] && $arr[$i] > $first) {
//         $second = $arr[$i];
//     }
// }
// echo $second;

// echo $compare;

// function wordCount($word){
//     $word = strtolower($word);
//     $cleanString = preg_replace('/[^a-z]/', ' ', $word);
//     // $words = trim($cleanString);
//     $arr = explode(' ', $cleanString);
//     $wordCount = array_count_values($arr);
//     return $wordCount;
// }
// $str = "Hello World, This is PHP Code. PHP";
// $funcCall = wordCount($str);
// echo'<pre>';print_r($funcCall);


// function calculateSumDigits($value){
//     $sum = 0;
//     while ( $value > 0 ) {
//         $digit  = $value % 10;
//         $sum    += $digit;
//         $value  = ($value / 10);
//         // echo $value;
//     }
//     return $sum;
// }
// $num = 123456789;
// echo calculateSumDigits($num);
// $array = [9,5,2,7,3,6,10,8,4,1];
// $array = [2,3,1];
// $arrLength = count($array);
// // echo $arrLength;
// for($i=0;$i<$arrLength -1;$i++){
//     // echo $i;
//     for($j=0;$j<$arrLength -$i -1;$j++){
//         // echo $array[$j +1];
//         // echo $array[$j];
//         // echo $j;
//         // echo $array[$j] . ' > ' . $array[$j + 1],'<br>';
//         if($array[$j] > $array[$j + 1]){
//             // echo $array[$j];exit;
//             $serialize_data = $array[$j];
//             // echo $array[$j +1];exit;
//             // echo $array[$j] . '==' . $array[$j +1],'<br>';
//             // echo $array[$j +1],',';
//             // echo $array[$j],',';
//             // echo $serialize_data,',';exit;
//             $array[$j] = $array[$j +1];
//             // echo $array[$j];exit;
//             // echo $serialize_data,','; 
//             $array[$j +1] = $serialize_data;
//             // echo $array[$j +1];exit;
//         }
//     }
// }
// // echo'<pre> Unsorted Array: ';print_r([9,5,2,7,3,6,10,8,4,1]);
// echo'<pre> Sorted Array: ';print_r($array);

/* function rev($s){
    $str = "";
    for($i=strlen($s) -1; $i>=0; $i--){
        // echo $s[$i];
        $str .=$s[$i];
    }
    return $str;
}
echo rev("shuvadeep"); */

/* function primeNumb($value){
    for($i=2;$i<=$value; $i++){
        // echo $i;
        for($j=2;$j<$i; $j++){
            if($i % $j == 0){
                break;
            }
        }
        if($i == $j){
            echo "Prime Number: " . $i . '<br>';
        }
    }
}

echo primeNumb(13); */


/* $words = "hello i'm shuvadeep and i'm from calefonia";
$len = strlen($words);
// echo $len / 2;
for($i = 0; $i < $len; $i++) {
    // echo $words[$i];
    if($i == 19){
        break;
    }
    echo $words[$i];
} */
// output: hello i'm shuvadeep

// function arrayRev($arr){
//     $blankArr = [];
//     for($i=count($arr) -1; $i>=0; $i--){ 
//         $blankArr[] .= $arr[$i];
//     }
//     // return print_r($blankArr);
//     echo'<pre>';print_r($blankArr);
// }
// echo arrayRev([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]);


/* function reverse($rev){
    $value = '';
    for($i = strlen($rev) -1; $i >= 0 ; $i--){
        // echo $rev[$i];
        $value .= $rev[$i]; 
    }
    return $value;
}
echo reverse("CSM"); */

/* for($i=1; $i<=6; $i++){
    echo $i;
    if($i % 3 == 0){
        echo '<br>';
    }
} */

// for($i=1; $i<=12; $i++){
//     echo $i;
//     if($i % 3 == 0){
//         echo '<br>';
//     }
// }

// for( $i = 1; $i <=4; $i++ ) {
//     // echo $i;
//     $i1 = $i + 4;
//     $i2 = $i1 + 4;
//     echo $i . $i1 . $i2 . '<br>';
// }

/* $arr = [100, 50, 40, 55, 43, 10, 4, 11, 77, 62];

$center_element = $arr[0];
$count = count($arr);
$r = $count / 2;
// echo $r;exit;
for($i=0; $i<=$r; $i++) {
    // echo $arr[$i].'<br>' 
        $center_element = $arr[$i]; 
} */
// echo $center_element;
// echo count($arr);exit;
/* $small_element = $arr[0]; // 4 < 4
for($i=0; $i<count($arr); $i++){
    // echo $arr[$i].'<br>';
    if($arr[$i] < $small_element){
        $small_element = $arr[$i];
        // echo  $arr[$i].'<br>';
    }
}
echo $small_element; */

