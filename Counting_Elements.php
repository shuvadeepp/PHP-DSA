<?php 

    /* 
        Counting Elements: 
        Write a program to count the occurrences of each element in an array. 
    */

    function countOccurrences($arr) {
        $counts = array(); // Initialize an empty array to store counts
        foreach ($arr as $element) {
            if (isset($counts[$element])) {
                $counts[$element]++; // Increment count if element exists
            } else {
                $counts[$element] = 1; // Set count to 1 for new elements
            }
        }
        return $counts; // Return the counts array
    }
    
    $arrNum = array(1, 2, 3, 1, 2, 4, 3, 2, 1);
    $elementCounts = countOccurrences($arrNum);
    
    // Print the results in a user-friendly format
    foreach ($elementCounts as $element => $count) {
        echo "$element:: $count times<br>";
    }
    

    

