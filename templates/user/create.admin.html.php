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
                <!-- <input type="button" value="Deconnexion" id="dcon"> -->
                <a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>" action="deconnexion">Deconnexion</a>
            </div>
            <div id="mainn">
                <div id="affiche">
                    <div id="profil">
                    <img src="/img/-1_orig.jpg" alt=""><br>
                    </div>
                    <div class="liste"><a href="<?=WEB_ROOT."?controller=user&action=liste_q"?>">Liste Questions</a><img src="/img/Icônes/ic-liste.png" alt=""></div>
                    <div class="liste"><a href="<?=WEB_ROOT."user".DIRECTORY_SEPARATOR."?controller=user&action=create_a"?>">Créer Admin</a><img src="/img/Icônes/ic-ajout.png" alt=""></div>
                    <div class="liste"><a href="<?=WEB_ROOT.DIRECTORY_SEPARATOR."?controller=user&action=liste"?>">Liste Joueurs</a><img src="/img/Icônes/ic-liste-active.png" alt=""></div>
                    <div class="liste"><a href="<?=WEB_ROOT."?controller=question&action=Create"?>">Créer Question</a><img src="/img/Icônes/ic-ajout.png" alt=""></div>
                </div>
                        <?=require_once(ROOT."templates".DIRECTORY_SEPARATOR."user".DIRECTORY_SEPARATOR."inscription.html.php");
                        ?>
