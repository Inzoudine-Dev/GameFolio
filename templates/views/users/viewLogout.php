

<section class="section_logout">

<div class="error_class">
    <?php if (isset($goodBayMessage)): ?>
        <p class="error_login_class"><?php echo htmlspecialchars($goodBayMessage,ENT_QUOTES,'UTF-8'); ?></p>
    <?php endif; ?>

</div>

    <div class="btn_logout_content">
        <div class="btn_logout">

            <button type="button" class="btn_accueil">
                <a href="/GameFolio/users/home">ACCUEIL</a>
            </button>

            <button type="button" class="btn_connexion">
                <a href="/GameFolio/users/home/login">CONNEXION</a>
            </button>

        </div>
    </div>

</section>