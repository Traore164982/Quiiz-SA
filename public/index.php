<?php
if (session_status()==PHP_SESSION_NONE) {
    session_start();
}
 require_once dirname(dirname( __FILE__))."/config".DIRECTORY_SEPARATOR."constantes.php";

 require_once dirname(dirname(__FILE__))."/config".DIRECTORY_SEPARATOR."orm.php";
  
 require_once dirname(dirname(__FILE__))."/config".DIRECTORY_SEPARATOR."role.php";
 
 require_once dirname(dirname(__FILE__))."/config".DIRECTORY_SEPARATOR."validator.php";
if (isset($_SESSION['errors'])){
    $errors=$_SESSION['errors'];
    unset($_SESSION['errors']);  
}
include_once(dirname(dirname(__FILE__))."/templates".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."header.html.php");


 require_once dirname(dirname(__FILE__))."/config".DIRECTORY_SEPARATOR."router.php";

 require_once(dirname(dirname(__FILE__))."/templates".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."footer.html.php");
