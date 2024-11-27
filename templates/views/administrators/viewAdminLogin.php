
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<section>

    <h1 class="titre_form_login">Vous etes un administrateur de ce site? Connecter-vous !!</h1>

    <form action="/GameFolio/administrators/login" method="post" class="form_login_class">


            <input type="email" name ="email" placeholder="email" class="input_email_class" aria-label="email" required>



            <input type="password" name ="password" placeholder="Mot de passe" class="input_password_class" aria-label="password" required>



            <input type="submit" value="connexion" class="bt_connexion_class">


    </form>

    <div class="error_class">
        <?php if (isset($erroMessage)): ?>
            <p class="error_login_class"><?php echo $erroMessage; ?></p>
        <?php endif; ?>
    </div>


</section>