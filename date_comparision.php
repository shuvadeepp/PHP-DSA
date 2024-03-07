<?php
 
function dateComparison($d1){
 
    $toDate     = "01-03-2024";
    $frmDate    = "31-03-2024";
    
	$todate     = strtotime($toDate);
    $frmdate    = strtotime($frmDate);
	//echo $todate;
    
    if($d1 <= $frmdate && $d1 >= $todate){
    	echo "true";
	} else {
    	echo "false";	
    }
}

$givenDate = "06-03-2024";

echo dateComparison(strtotime($givenDate));

/* ::::: using pre defind function ::::: */

function datematch($gDate){

	$gDate      = strtotime($gDate);
	$toDate     = "01-03-2024";
    $frmDate    = "31-03-2024";
     
    if($gDate <= strtotime($frmDate) && $gDate >= strtotime($toDate)){
    	echo "true";
    } else {
    	echo "false";
    }
    
}

$givenDate = ['06-06-2024'];
$result = array_map("datematch", $givenDate);