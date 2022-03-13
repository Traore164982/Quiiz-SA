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
                <div id="list_creaq">
                    <h2>Créer Question</h2>
                    <div>
                        <form id="form2" method="POST">
                        <input type="hidden" name="controller" value="question">
                        <input type="hidden" name="action" value="Create">
                    <?php if(isset($errors['Question'])):?>
                    <p style="color: red;"><?=$errors['Question']?></p>
                <?php endif?>
               <div class="form-control"> 
                <label class=""><b>Question :</b></label>
                <textarea name="question" id="textQ"></textarea>
                <small>Error message</small>
                </div>
                <?php if(isset($errors['nombre'])):?>
                    <p style="color: red;"><?=$errors['nombre']?></p>
                <?php endif?>
               <div class="form-control"> 
                <label class=""><b>Nombre de Points :</b></label>
                <div id="depl">
                <input type="text" value="-" id="left" onclick="leftt()">
                <input type="text" name="nombre" id="nombre" value="1" class="ins" onchange="changeNum()">
                <input type="text" value="+" id="right"  onclick="rightt()">
                </div>
                <small id="Er">Error message</small>
                </div>
                <?php if(isset($errors['selected'])):?>
                    <p style="color: red;"><?=$errors['selected']?></p>
                <?php endif?>
               <div class="form-control"> 
                <label class=""><b>Type de Réponse</b></label>
                <select name="selected" id="selected" onchange="change()">
                    <option value="">Donner votre Type de Réponse</option>
                    <option value="Checkbox">Choix Multiple</option>
                    <option value="Radio">Choix Unique</option>
                    <option value="Text">Champ de Text</option>
                </select>
                <input type="button" name="submit" id="cree_rep" value="+">
                <small>Error message</small>
                </div>
                <div id="ajout">
                        
                </div>
                        </form>
                    </div>
                    <input type="submit" value="Enregistrer" name="submit">
                </div>
            </div>
            
        </div>

 