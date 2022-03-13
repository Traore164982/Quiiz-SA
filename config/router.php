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
            case 'question':
                require_once(PATH_Src."controllers".DIRECTORY_SEPARATOR."questions.controllers.php");
                break;
        default;
/*         echo "Vous vous êtes Trompé de Redirection";
 */     require_once(PATH_Views."securite".DIRECTORY_SEPARATOR."error404.html.php");
            break;
    }
}else{
    require_once(PATH_Src."controllers".DIRECTORY_SEPARATOR."securite.controllers.php");
}