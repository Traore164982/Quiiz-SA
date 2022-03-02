<?php

// Foonction de Recupération de données du Fichier Json

function json_to_array(string $key):array{
    $dataJson = file_get_contents(PATH_Db);
    $data = json_decode($dataJson,true);
    return $data[$key];
}


/* function array_to_json(string $key,array $data){
    return [];

} */