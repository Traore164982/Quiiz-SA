<?php
function test(){
    die("Traore");
}
function champ_obligatoire(string $key,string $data,array &$errors,string $message){
    if (empty($data)) {
        $errors[$key]=$message;
    }
}

function valid_email(string $key,string $data,array &$errors,string $message){
    if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
        $errors[$key]=$message;
    }
}

/* function valid_password(string $key,string $data,array &$errors,string $message){

} */