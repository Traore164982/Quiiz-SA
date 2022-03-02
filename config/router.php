<?php
// var_dump(PATH_Src."controllers".DIRECTORY_SEPARATOR."securite.controller.php");
if (isset($_REQUEST['controller'])) {
    switch ($_REQUEST['controller']) {
        case 'securite':
            require_once(PATH_Src."controllers".DIRECTORY_SEPARATOR."securite.controllers.php");
            break;
        case 'user':
            require_once(PATH_Src."controllers".DIRECTORY_SEPARATOR."user.controllers.php");
            break;
        default;
        echo "Vous vous êtes Trompé de Redirection";
            break;
    }
}else{
    require_once(PATH_Src."controllers".DIRECTORY_SEPARATOR."securite.controllers.php");
}