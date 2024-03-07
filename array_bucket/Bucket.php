<?php
session_start();
if(!isset($_SESSION['newSess'])){
    $_SESSION['newSess'] = array();
}
// echo'<pre>';print_r($_SERVER);exit;
if(isset($_SERVER['REQUEST_METHOD']) == "POST"){
    $action = $_POST['action']; 
    if (isset($_POST['bucketSize'])) {
        $bucketSize = $_POST['bucketSize'];
        // print_r($bucketSize);
    }
    switch($action){
        case 'generateElem':
            $maxlimit = $bucketSize;
           
            if(count($_SESSION['newSess']) < $maxlimit){
                //echo count($_SESSION['newSess']);exit;
                //echo 111;exit;
                do{
                    $generateElement = rand(1, $maxlimit);  
                } while(in_array($generateElement, $_SESSION['newSess']));
                array_push($_SESSION['newSess'], $generateElement);
                sort($_SESSION['newSess']);
                echo'<pre>';print_r($_SESSION['newSess']); 
            }else{
                //echo 222222;exit;
                echo'<pre>';print_r($_SESSION['newSess']); 
            } 
                
        break;
        case 'unsetArray': 
            unset($_SESSION['newSess']);
            echo'<pre>';print_r(array()); 
        
        break;
    } 
} 