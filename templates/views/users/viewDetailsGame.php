
<section class="section_game_details_class">
    <h1 class="">Jeu de <?php if(isset($datasGame)) echo $datasGame->getCategorie()?></h1>
<div class="details_game_class">
    <?php if(isset($datasGame)): ?>
            <article class="">

                <div class="test_img_details_game_class">
                    <img src="<?php echo $datasGame->getUrlImage(); ?>" class="imgDetailsGame_class" alt="logo"/>
                    <div class="bande_promo_class">Promotion</div>
                </div>

                <div class="info_jeu_details_class">
                <p class="details_info_game_class"><?php echo htmlspecialchars($datasGame->getNomJeu(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="details_info_game_class"><?php echo htmlspecialchars($datasGame->getCategorie(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="details_info_game_class"><?php echo $datasGame->getPrix().' euros'; ?></p>
                </div>
            </article>

    <?php endif ;  ?>
</div>

</section>