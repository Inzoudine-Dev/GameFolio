<h1> test veiwDetailsGame </h1>
<section>
<h2 class="">Jeu de combat</h2>
<div class="">
    <?php if(isset($datasGame)): ?>

            <article class="">

                    <img src="<?php echo $datasGame->getUrlImage(); ?>" class="" alt="logo"/>
                    <p class="">Nom : <?php echo htmlspecialchars($datasGame->getNomJeu(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="">Catégorie : <?php echo htmlspecialchars($datasGame->getCategorie(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="">Prix : <?php echo $datasGame->getPrix(); ?> euros</p>

            </article>
        <?php endif ;  ?>
</div>

</section>