        <?php

        // Foonction de Recupération de données du Fichier Json

        function json_to_array(string $key):array{
            $dataJson = file_get_contents(PATH_Db);
            $data = json_decode($dataJson,true);
            return $data[$key];
        }


        function array_to_json(string $key,array $data){
        if(filesize("PATH_Db")==0){
            $first_register = array($data);
            $data1 = $first_register;
        }else{
            // $old = json_decode(file_get_contents(PATH_Db));
            $old = file_get_contents(PATH_Db);
            $datac = json_decode($old,true);
            //array_push($old,$data);
            $datac[$key][] = $data;
        }
        if(!file_put_contents(PATH_Db,json_encode($datac,JSON_PRETTY_PRINT),LOCK_EX)){
            
            $er = "Veuillez Réessayer";
        }else{
            die("ok");
            $success = "Enregistrer avec Succés";
        }

        }