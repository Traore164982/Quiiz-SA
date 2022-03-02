<?php

function is_connect():bool{
    return isset($_SESSION['user-connect']);
}

function is_Joueur(){
    return is_connect() && $_SESSION['user-connect']['role']="Joueur";
}

function is_Admin(){
    return is_connect() && $_SESSION['user-connect']['role']="Admin";
}