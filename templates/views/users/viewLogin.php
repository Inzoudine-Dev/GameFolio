<div class="error_class">
    <?php if (isset($goodBayMessage)): ?>
        <p class="error_login_class"><?php echo $goodBayMessage; ?></p>
    <?php endif; ?>

</div>
<section>

    <h1 class="titre_form_login">Connecter-vous !!</h1>

    <form action="/GameFolio/users/home/login" method="post" class="form_login_class">


            <input type="email" name ="email" placeholder="email" class="input_email_class" required>



            <input type="password" name ="password" placeholder="Mot de passe" class="input_password_class" required>



            <input type="submit" value="connexion" class="bt_connexion_class" id="bt_connexion_id">


    </form>

    <div class="error_class">
        <?php if (isset($errorMessage)): ?>
            <p class="error_login_class"><?php echo $errorMessage; ?></p>
        <?php endif; ?>
    </div>

    <div class="text_inscription">
        <h1 class="titre_form_login">Vous n'avez pas encore de conpte ??</h1>
        <h1 class="titre_form_login">Inscrivez-vous !!</h1>
    </div>


</section>