
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<section>

    <h1 class="titre_form_login">Connecter-vous !!</h1>

    <form action="/GameFolio/users/home/login" method="post" class="form_login_class">


            <input type="email" name ="email" placeholder="email" class="input_email_class" required>



            <input type="password" name ="password" placeholder="Mot de passe" class="input_password_class" required>



            <input type="submit" value="connexion" class="bt_connexion_class">


    </form>

    <div class="error_class">
        <?php if (isset($donnees['msg'])): ?>
            <p class="error_login_class"><?php echo htmlspecialchars($donnees['msg'], ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>
    </div>

    <div class="text_inscription">
        <h1 class="titre_form_login">Vous n'avez pas encore de conpte ??</h1>
        <h1 class="titre_form_login"> <a href="/GameFolio/users/home">Inscrivez-vous avec ce lien!!</a> </h1>
    </div>
</section>