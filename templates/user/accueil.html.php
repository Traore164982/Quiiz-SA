<?php
     if (!is_connect()){
        header("location:".WEB_ROOT);
        exit();
    }
?>
<div id="accueil">
    <marquee behavior="slide" direction="up">
        <h1>Bienvenue au Jeu de Quiiz</h1>
    </marquee>
    <a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>" action="deconnexion">Deconnexion</a>
</div>