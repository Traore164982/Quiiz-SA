
        <div id="container">
            <!-- zone de connexion -->
            <form action="<?=WEB_ROOT?>" method="POST">
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="connexion">
            <?php if(isset($errors['connexion'])):?>
                    <p style="color: red;"><?=$errors['connexion']?></p>
                <?php endif?>
                <div id="log">
                    <h1>Login Form</h1><span>X</span>
                </div>
                <?php if(isset($errors['login'])):?>
                    <p style="color: red;"><?=$errors['login']?></p>
                <?php endif?>
                <label><b></b></label>
                <input type="text" placeholder="Login" name="login">
                <?php if(isset($errors['password'])):?>
                    <p style="color: red;"><?=$errors['password']?></p>
                <?php endif?>
                <label><b></b></label>
                <input type="password" placeholder="Password" name="password">

                <input type="submit" id='submit' value='Connexion'>
                <a href="<?=WEB_ROOT."?controller=user&action=inscription"?>">S'inscrire pour jouer</a>
            </form>
        </div>

 