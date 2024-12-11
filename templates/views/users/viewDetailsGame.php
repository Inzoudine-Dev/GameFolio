
<section>
    <h1 class="">Jeu de <?php if(isset($datasGame)) echo $datasGame->getCategorie()?></h1>
<div class="details_game_class">
    <?php if(isset($datasGame)): ?>
            <article class="">

                    <img src="<?php echo $datasGame->getUrlImage(); ?>" class="" alt="logo"/>
                    <p class="details_info_game_class">Nom : <?php echo htmlspecialchars($datasGame->getNomJeu(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="details_info_game_class">Catégorie : <?php echo htmlspecialchars($datasGame->getCategorie(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="details_info_game_class">Prix : <?php echo $datasGame->getPrix(); ?> euros</p>

            </article>

    <?php endif ;  ?>
</div>

</section>