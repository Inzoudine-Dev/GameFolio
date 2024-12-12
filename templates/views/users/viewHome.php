<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>


<form action="" method="" class="form_recherche_class">
    <div class="recherche_class">
        <input type="text" name="recherche" placeholder="Recherche..." class="input_recherche_class" aria-label="Recherche" required>
        <button type="submit" class="btn_recherche">
            <img src="/GameFolio/public/images/loupeRecherche.png" class="img_loupe_class">
        </button>
    </div>
</form>

<div class="msg_connecter_class">
    <?php if (isset($msgConceter)): ?>
        <p class="text_msg_class"><?php echo htmlspecialchars($msgConceter,ENT_QUOTES,'UTF-8'); ?></p>
    <?php endif; ?>
</div>

<section class="section_slide_class">

    <div class="slider-container">
        <div class="slider" aria-label="Galerie d'images">
            <div class="slide" tabindex="0">
                <img src="/GameFolio/public/images/imagesGames/RaceGames/img.png" alt="Description de l'image 1" />
            </div>
            <div class="slide" tabindex="0">
                <img src="/GameFolio/public/images/imagesGames/RaceGames/img_1.png" alt="Description de l'image 2" />
            </div>
            <div class="slide" tabindex="0">
                <img src="/GameFolio/public/images/imagesGames/RaceGames/img_2.png" alt="Description de l'image 3" />
            </div>
        </div>

        <!-- Boutons de navigation -->
        <button class="prev" aria-label="Image précédente">❮</button>
        <button class="next" aria-label="Image suivante">❯</button>

        <!-- Indicateurs pour SEO et navigation -->
        <div class="indicators">
            <button aria-label="Aller à l'image 1" data-index="0"></button>
            <button aria-label="Aller à l'image 2" data-index="1"></button>
            <button aria-label="Aller à l'image 3" data-index="2"></button>
        </div>
    </div>


</section>


<section>
    <h2 class="title_offer" id="title_offer_id">Les offres du jour</h2>
    <div class="offres_class">
        <?php if(isset($offres))foreach ($offres as $offre): ?>
            <a href="/GameFolio/users/home/offres/<?php echo urlencode($offre->getNomOffre()); ?>" class="lien_offre_class">
                <article class="offre_class">
                    <p class="data_offre_class"><?php echo htmlspecialchars($offre->getNomOffre(),ENT_QUOTES,'UTF-8');?> disponible !</p>
                    <p class="data_offre_class">Réduction : <?php echo $offre->getReduction(); ?> euros</p>
                    <p class="data_offre_class">jeu de l'offre : <?php echo htmlspecialchars($offre->getGame()->getNomJeu(),ENT_QUOTES,'UTF-8');?></p>
                </article>
            </a>
        <?php endforeach ;  ?>
    </div>

</section>

<hr>

<section>
    <h2 class="title_categorie_games">Jeux de combat</h2>
    <div class="games_figth_class">
        <?php if(isset($games)) foreach ($games as $game): ?>
        <?php if ($game->getCategorie()=="combat"): ?>
            <article class="game_class">
                <a href="/GameFolio/users/home/games/<?php echo urlencode($game->getNomJeu()); ?>" class="lien_imageGame_class">
                    <img src="<?php echo $game->getUrlImage(); ?>" class="image_game_class" alt="logo"/>
                    <p class="info_jeu_class">Nom : <?php echo htmlspecialchars($game->getNomJeu(), ENT_QUOTES, 'UTF-8'); ?></p>

                </a>
            </article>
            <?php endif ;  ?>
        <?php endforeach; ?>
    </div>
</section>

<hr>

<section>

    <h2 class="title_categorie_games">Jeux de course</h2>
    <div class="games_race_class">
        <?php if(isset($games)) foreach ($games as $game): ?>
        <?php if ($game->getCategorie()=="course"): ?>
            <article class="game_class">
                <a href="/GameFolio/users/home/games/<?php echo urlencode($game->getNomJeu()); ?>"  class="lien_imageGame_class">
                    <img src="<?php echo $game->getUrlImage(); ?>" class="image_game_class" alt="logo"/>
                    <p class="info_jeu_class">Nom : <?php echo htmlspecialchars($game->getNomJeu(), ENT_QUOTES, 'UTF-8'); ?></p>
                </a>
            </article>
            <?php endif ;  ?>
        <?php endforeach; ?>
    </div>
</section>