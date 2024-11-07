<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<h1 class="titl_register_class">Bienvenue dans la section inscription</h1>


<div class="error_class">
    <?php if (isset($errorMessage)): ?>
        <p class="error_login_class"><?php echo htmlspecialchars($errorMessage,ENT_QUOTES,'UTF-8'); ?></p>
    <?php endif; ?>
</div>


<div class="register_msg_class">
    <?php if (isset($registerMessage,$identifiantEmail)): ?>
        <p class="msg_register_class"><?php echo htmlspecialchars($registerMessage,ENT_QUOTES,'UTF-8'); ?></p>
        <p class="email_register_class"><?php echo 'Votre identifian de connexion est '.htmlspecialchars($identifiantEmail,ENT_QUOTES,'UTF-8'); ?></p>
    <?php endif; ?>
</div>

<form action="/GameFolio/users/home/registration" method="post" class="form_register_class" autocomplete="off">


    <input type="text" name ="nom" placeholder="Nom" class="input_nom_register_class" aria-label="name" value="" required>

    <input type="text" name ="prenom" placeholder="Prenom" class="input_prenom_register_class" aria-label="name"  required>

    <input type="datetime-local" name ="dateNaissance" placeholder="Date de naissance" class="input_dateNaissance_register_class" aria-label="date" required>

    <input type="text" name ="telephone" placeholder="Telephone" class="input_telephone_register_class" aria-label="telephone" required>

    <input type="email" name ="email" placeholder="email" class="input_email_register_class" aria-label="email" required>

    <input type="password" name ="password" placeholder="Mot de passe" class="input_password_register_class" aria-label="password" required>

    <input type="submit" value="connexion" class="bt_register_class" id="bt_register_id">


</form>
