<?php
 
function validateEmail($email) {
    // echo $email;exit;
     
    if (empty($email)) {
        return "Email address is required.";
    }
// echo  filter_var($email,FILTER_VALIDATE_EMAIL);exit;
     
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format.";
    }

     
    $allowedDomains = ['gmail.com', 'yahoo.com', 'outlook.com'];
     
    $emailDomain = substr(strrchr($email, "@"), 1);
    
    if (!in_array($emailDomain, $allowedDomains)) {
        return "Email domain is not allowed.";
    }

    return "Valid email address.";
}
 
$email = "shuvadeep@gmail.com";
echo validateEmail($email);
?>
