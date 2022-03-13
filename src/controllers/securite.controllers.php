<?php
require_once(PATH_Src."models".DIRECTORY_SEPARATOR."user.model.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST['action'])) {
        if($_REQUEST['action']=="connexion"){
            $login = $_POST['login'];
            $password = $_POST['password'];
            connexion($login,$password);
        }
    }
}

if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            require_once(PATH_Views."securite".DIRECTORY_SEPARATOR."connexion.html.php");
        }if($_REQUEST['action']=="deconnexion") {
            logout();
        }
    }
    else {
        require_once(PATH_Views."securite".DIRECTORY_SEPARATOR."connexion.html.php");    }
}

function connexion(string $login,string $password):void{    
    $errors =[];
    champ_obligatoire('login',$login,$errors,"Login Obligatoire");
    if (count($errors)===0){
        valid_email('login',$login,$errors,"Login Incorrect");
    }
    champ_obligatoire('password',$password,$errors,"Password Incorrect");
    if (count($errors)===0){
        $user = find_user_login_password($login,$password);
        if(count($user)!=0 && $user['role']=="Admin"){
            $_SESSION['user-connect'] = $user;
            header("location:".WEB_ROOT."?controller=user&action=liste");
            exit();
        }
        if(count($user)!=0 && $user['role']=="Joueur"){
            $_SESSION['user-connect'] = $user;
            header("location:".WEB_ROOT."?controller=user&action=accueil");
            exit();
        }else{
            $errors['connexion'] = "Login ou Mot de passe Incorrect";
            $_SESSION['errors'] = $errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }else{
        $_SESSION['errors'] = $errors;
        header("location:".WEB_ROOT);
        exit();
    }
}

function logout(){
    session_destroy();
    unset($_SESSION['user-connect']);
    header("location:".WEB_ROOT);
    exit();
}