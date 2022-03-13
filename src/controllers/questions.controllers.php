<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "Create") {
            require_once(PATH_Views . "question" . DIRECTORY_SEPARATOR . "create.question.html.php");
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "Create") {
            $question = $_POST['question'];
            $nombre = $_POST['nombre'];
            $selected = $_POST['selected'];
            header("location:" . WEB_ROOT . "?connexion=questions&action=Create");
        }
    }
}
