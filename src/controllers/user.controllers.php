<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == "connexion"){
            echo "Traiter le Formulaire de connexion";
        }
    }
}

if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if (!is_connect()){
            header("location:".WEB_ROOT);
            exit();
        }
        if($_REQUEST['action']=="accueil"){
            require_once(PATH_Views."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }
        if($_REQUEST['action']=="inscription"){
            require_once(PATH_Views."user".DIRECTORY_SEPARATOR."inscription.html.php");
        }
        if($_REQUEST['action']=="liste"){
            require_once(PATH_Views."user".DIRECTORY_SEPARATOR."liste.joueur.html.php");
        }
    }
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST['action'])) {
        if($_REQUEST['action']=="inscription"){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $cpassword = $_POST['cPassword'];
            inscription($nom,$prenom,$login,$password,$cpassword);
        }
    }
}

function inscription(string $nom, string $prenom,string $login,string $password,string $cpassword):void{    
    $errors =[];
    champ_obligatoire('nom',$nom,$errors,"Nom Obligatoire");
    champ_obligatoire('prenom',$prenom,$errors,"Prénom Obligatoire");
    champ_obligatoire('login',$login,$errors,"Login Obligatoire");
    champ_obligatoire('password',$login,$errors,"Password Obligatoire");
    champ_obligatoire('cPassword',$login,$errors,"Veuillez Confirmer votre Password");
    if (count($errors)==0){
        valid_email('login',$login,$errors,"Login Incorrect");
    }
    champ_obligatoire('password',$password,$errors,"Password Incorrect");
    if (count($errors)==0){
        
    }else{
        $_SESSION['errors'] = $errors;
        require_once(PATH_Views."user".DIRECTORY_SEPARATOR."inscription.html.php");
        exit();
    }
}

/* function list(){
    
} */