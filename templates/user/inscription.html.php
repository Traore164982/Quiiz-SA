<div id="container_ins">
            <!-- zone de connexion -->
            
            <form action="" method="POST" id="form">
            <input type="hidden" name="controller" value="user">
            <input type="hidden" name="action" value="inscription">
                <?php if(isset($errors['inscription'])):?>
                    <p style="color: red;"><?=$errors['inscription']?></p>
                <?php endif?>
                    <h3>S'inscrire</h3><br>
                    <p>Pour tester votre niveau de culture générale</p>
                    <hr>
               <?php if(isset($errors['prenom'])):?>
                    <p style="color: red;"><?=$errors['prenom']?></p>
                <?php endif?>
                <div class="form-control">
                    <label><b>Prénom</b></label>
                    <input type="text" placeholder="Mohamed" name="prenom" id="prenom" class="ins">
                    <small>Error message</small>
                </div>
                <?php if(isset($errors['nom'])):?>
                    <p style="color: red;"><?=$errors['nom']?></p>
                <?php endif?>
               <div class="form-control"> 
                <label><b>Nom</b></label>
                <input type="text" placeholder="Traoré" name="nom" id="nom" class="ins" >
                <small>Error message</small>
            </div>
            <?php if(isset($errors['login'])):?>
                    <p style="color: red;"><?=$errors['login']?></p>
                    <?php endif?>
            <div class="form-control">
                <label><b>Login</b></label>
                <input type="text" placeholder="traore@gmail.com" name="login" class="ins" id="login">
                <small>Error message</small>
            </div>
            <?php if(isset($errors['password'])):?>
                    <p style="color: red;"><?=$errors['password']?></p>
                    <?php endif?>
            <div class="form-control">
                <label><b>Password</b></label>
                <input type="password" placeholder="Password" name="password" class="ins" id="password" >
                <small>Error message</small>
            </div>
            <?php if(isset($errors['cPassword'])):?>
                    <p style="color: red;"><?=$errors['cPassword']?></p>
                    <?php endif?>
            <div class="form-control">
                <label><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" name="cPassword" class="ins" id="cPassword"  >
                <small>Error message</small>
            </div>
                    <div id="av">
                        <span>Avatar</span>
                        <input type="button" value="Choisir un fichier" id="fi">
<!--                         <input type="file"  name="profil" id="avatar">
 -->                    </div>
                <input type="submit"  value='Créer compte' name="submit">
                <p class="er"><?php echo @$er ?></p>
                <p class="success"><?php echo @$success ?></p>
            </form>
            <div id="lo">
                <img src="/img/-1_orig.jpg" alt=""><br>
                <span>Avatar du Joueur</span>
            </div>
        </div>
</div>
