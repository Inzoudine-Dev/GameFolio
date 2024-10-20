<?php session_start(); ?>
<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0")
?>
<section class="sexion_admin_login">

    <h1 class="titre_form_login">Connecter-vous !!</h1>

    <form action="/GameFolio/administrators/login" method="post" class="form_login_class">


        <input type="email" name ="email" placeholder="email" class="input_email_class" required>



        <input type="password" name ="password" placeholder="Mot de passe" class="input_password_class" required>

        <input type="text" name ="texttest" placeholder="text test" class="input_password_class" required>

        <input type="submit" value="connexion" class="bt_connexion_class">


    </form>

    <p class="statut_connection"><?php echo $statut ?></p>

    <h1 class="testhomeadmin"><?php if(isset($_SESSION['statut'])) echo $_SESSION['statut']?></h1>
    <h1 class="testhomeadmin"><?php if(isset($_SESSION['email'])) echo $_SESSION['email']?></h1>
    <h1 class="testhomeadmin"><?php if(isset($_SESSION['password'])) echo $_SESSION['password']?></h1>

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
