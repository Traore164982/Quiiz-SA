<?php
     if (!is_connect()){
        header("location:".WEB_ROOT);
        exit();
    }
?>
        <div id="container_list">
            <!-- zone de connexion -->
            <div id="deconnect">
                <h1>Créer et Paramétrer Votre Quiiz</h1>
                <!-- <input type="button" value="Deconnexion"> -->
                <a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>" action="deconnecion">Deconnexion</a>
            </div>
            <div id="mainn">
                <div id="affiche">
                    <div id="profil">
                    <img src="/img/-1_orig.jpg" alt=""><br>
                    </div>
                    <div class="liste"><a href="<?=WEB_ROOT."?controller=user&action=liste_q"?>">Liste Questions</a><img src="/img/Icônes/ic-liste.png" alt=""></div>
                    <div class="liste"><a href="<?=WEB_ROOT."user".DIRECTORY_SEPARATOR."?controller=user&action=create_a"?>">Créer Admin</a><img src="/img/Icônes/ic-ajout.png" alt=""></div>
                    <div class="liste"><a href="<?=WEB_ROOT.DIRECTORY_SEPARATOR."?controller=user&action=liste"?>">Liste Joueurs</a><img src="/img/Icônes/ic-liste-active.png" alt=""></div>
                    <div class="liste"><a href="<?=WEB_ROOT.DIRECTORY_SEPARATOR."?controller=question&action=Create"?>">Créer Question</a><img src="/img/Icônes/ic-ajout.png" alt=""></div>
                </div>
                <div id="list">
                    <h2>Liste des Questions</h2>
                    <div>
                        <?php
                            $questions = json_to_array("questions");
                            echo "<ol>";
                            foreach ($questions as $q) {
                                    echo "<li>".$q['question']."</li>";
                                    echo "<ul>";
                                    echo "<li>".$q['a']."</li>";
                                    echo "<li>".$q['b']."</li>";
                                    echo "<li>".$q['c']."</li>";
                                    echo "<li>".$q['d']."</li>";
                                    echo "</ul>";  
                            }
                            echo "</ol>";
                        ?>
                    </div>
                    <input type="button" value="Suivant">
                </div>
            </div>
            
        </div>

 