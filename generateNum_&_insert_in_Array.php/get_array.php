<?php 
    session_start();
    $global_array = array(); 
    if(!isset($_SESSION['session_global_array'])){
        $_SESSION['session_global_array'] = $global_array;
    }
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        $action = $_REQUEST['action'];
        switch ($action) {
            case "generateNumber":
                $generate_random_numb = rand(1, 10);
                $_SESSION['session_store_generate_numb'] = $generate_random_numb;
                echo $generate_random_numb;
            break;
            case "getArray":  
                global $global_array; 
                $_SESSION['blank_array'] = $global_array;
                print_r($global_array);
            break;   
        } 
    } 

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

        $action = $_REQUEST['action'];

        switch ($action) {
            case "pushNumber":
                /* if(isset($_SESSION['session_store_generate_numb'])){
                    global $global_array; 
                    $response = isset($_SESSION['global_array']) ? $_SESSION['global_array'] : array();
                    $global_array = $_SESSION['session_store_generate_numb'];
                    $_SESSION['global_array'] = $global_array;
                    // print_r($_SESSION);
                } */
                if(isset($_SESSION['session_global_array'])){
                    array_push($_SESSION['blank_array'], $_SESSION['session_store_generate_numb'].',');
                }
            break;
        }
    }
    // echo json_encode($_SESSION['blank_array']);exit;
    print_r($_SESSION['blank_array']);