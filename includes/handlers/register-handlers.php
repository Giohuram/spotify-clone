<?php

function sanitizeFormPassword(){
   $inputText = strip_tags($inputText); 
   return $inputText; 
}

function sanitizeFormUsername($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText; 
}

function sanitizeFormString($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText; 
}


function validateUsername($un){

}

function validateFirstname($fn){
    
}

function validateLastname($ln){
    
}

function validateEmails($em, $em2){
    
}

function validatePaswords($pw, $pw2){
    
}



if(isset($_POST['registerButton'])){
    //register button was pressed  
    $username = sanitizeFormUsername($_POST['username']);
    $firstname = sanitizeFormString($_POST['firstname']);
    $lastname = sanitizeFormString($_POST['lastname']);
    $email = sanitizeFormString($_POST['email']); 
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormString($_POST['password']);
    $password2= sanitizeFormString($_POST['password2']);

    validateUsername($username); 
    validateFirstname($firstname); 
    validateLastname($lastname);
    validateEmails($email, $email2);
    validatePaswords($password, $password2); 
 }

?>