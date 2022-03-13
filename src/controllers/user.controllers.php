<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "connexion") {
            echo "Traiter le Formulaire de connexion";
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "accueil") {
            require_once(PATH_Views . "user" . DIRECTORY_SEPARATOR . "accueil.html.php");
        }
        if ($_REQUEST['action'] == "inscription") {
            require_once(PATH_Views . "user" . DIRECTORY_SEPARATOR . "inscription.html.php");
        }
        if ($_REQUEST['action'] == "liste") {
            require_once(PATH_Views . "user" . DIRECTORY_SEPARATOR . "liste.joueur.html.php");
        }
        if ($_REQUEST['action'] == "liste_q") {
            require_once(PATH_Views . "user" . DIRECTORY_SEPARATOR . "liste.questions.html.php");
        }
        if ($_REQUEST['action'] == "create_a") {
            require_once(PATH_Views . "user" . DIRECTORY_SEPARATOR . "create.admin.html.php");
        }
        if ($_REQUEST['action'] == "create_q") {
            require_once(PATH_Views . "user" . DIRECTORY_SEPARATOR . "create.question.html.php");
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "inscription") {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $cpassword = $_POST['cPassword'];
            inscription($nom, $prenom, $login, $password, $cpassword);
            header("location:" . WEB_ROOT . "?connexion=user&action=connexion");
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "inscription") {
            $role = 'Joueur';
            if (is_Admin() && is_connect()) {
                $role = 'Admin';
            }
            $new_register = array(
                "nom" => $_POST["nom"],
                "prenom" => $_POST["prenom"],
                "login" => $_POST["login"],
                "password" => $_POST["password"],
                "role" => $role,
                "score" => 0
            );
            array_to_json("users", $new_register);
/*             var_dump(array_to_json("users", $new_register));
 */        }
    }
}

function inscription(string $nom, string $prenom, string $login, string $password, string $cpassword): void
{
    $errors = [];
    champ_obligatoire('nom', $nom, $errors, "Nom Obligatoire");
    champ_obligatoire('prenom', $prenom, $errors, "Prénom Obligatoire");
    champ_obligatoire('login', $login, $errors, "Login Obligatoire");
    champ_obligatoire('password', $login, $errors, "Password Obligatoire");
    champ_obligatoire('cPassword', $login, $errors, "Veuillez Confirmer votre Password");
    if (count($errors) == 0) {
        valid_email('login', $login, $errors, "Login Incorrect");
    }
    champ_obligatoire('password', $password, $errors, "Password Incorrect");
    if (count($errors) == 0) {
    } else {
        $_SESSION['errors'] = $errors;
        require_once(PATH_Views . "user" . DIRECTORY_SEPARATOR . "inscription.html.php");
        exit();
    }
}

function listejoueur()
{
    $users = json_to_array("users");
    echo "<table>";
    echo "<tr>";
    echo  "<td>Nom</td>";
    echo  "<td>Prenom</td>";
    echo  "<td>Score</td>";
    echo "</tr>";
    foreach ($users as $user) {
        if ($user['role'] == "Joueur") {
            echo "<tr>";
            echo "<td>" . $user['nom'] . "</td>";
            echo "<td>" . $user['prenom'] . "</td>";
            echo "<td>" . $user['score'] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}

/* function list(){
    
} */




/*if ($_SERVER["REQUEST_METHOD"]=="POST") {
        if (isset($_REQUEST['action'])) {
        if($_REQUEST['action']=="inscription"){
             if (isset($_POST['submit'])){
                $filename = $_FILES["profil"]["name"];
                $tempname = $_FILES["profil"]["tmp_name"];
                $folder = "uploads/".$filename;

            if ($filename!= ""){
                if (move_uploaded_file($tempname, $folder))  {
                    $msg = "Image uploaded successfully";
                }else{
                    $msg = "Failed to upload image";
              }          
            }
            var_dump($msg);
            die("Famma");
                $new_register = array(
                    "nom" => $_POST["nom"],
                    "prenom" => $_POST["prenom"],
                    "login" => $_POST["login"],
                    "password" => $_POST["password"],
                    "role"=>"Joueur",
                    // "avatar"=>$filename,
                    "score"=>0
            );
                array_to_json("users",$new_register);
                var_dump(array_to_json("users",$new_register));

    }
    }
 }*/
