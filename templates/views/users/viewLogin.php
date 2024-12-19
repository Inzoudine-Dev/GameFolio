<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<section>

    <h1 class="titre_form_login">Connecter-vous !!</h1>

    <div class="form_class">
    <form action="/GameFolio/users/home/login" method="post" class="form_login_class">


            <input type="email" name ="email" placeholder="email" class="input_email_class" aria-label="email" required>



            <input type="password" name ="password" placeholder="Mot de passe" class="input_password_class" aria-label="password" required>



            <input type="submit" value="connexion" class="bt_connexion_class" id="bt_connexion_id">


    </form>
    </div>

    <div class="error_class">
        <?php if (isset($errorMessage)): ?>
            <p class="error_login_class"><?php echo htmlspecialchars($errorMessage,ENT_QUOTES,'UTF-8'); ?></p>
        <?php endif; ?>
    </div>


    <a href="" class="link_password_lost_class"><p class="password_lost_class">Mot de passe oublier ?</p></a>

    <div class="text_inscription">
        <h1 class="titre_form_login">Vous n'avez pas encore de conpte ??</h1>
        <h1 class="titre_form_login">Inscrivez-vous !!</h1>
    </div>


</section>