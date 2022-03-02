<?php
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER["SCRIPT_FILENAME"]));

define("PATH_Src",ROOT."src".DIRECTORY_SEPARATOR);


define("PATH_Views",ROOT."templates".DIRECTORY_SEPARATOR);


define("PATH_Db",ROOT."data".DIRECTORY_SEPARATOR."db.json");


define("WEB_ROOT","http://localhost:8000/");


define("KEY_ERROR","errors");
