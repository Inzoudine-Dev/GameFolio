<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>


<form class="form_recherche_class">
    <input type="text" placeholder="Recherche" class="input_recherche_class" aria-label="Recherche">
</form>


<div class="msg_connecter_class">
    <?php if (isset($msgConceter)): ?>
        <p class="text_msg_class"><?php echo htmlspecialchars($msgConceter,ENT_QUOTES,'UTF-8'); ?></p>
    <?php endif; ?>
</div>

<section>
    <h2 class="title_offer" id="title_offer_id">Les offres du jour</h2>
    <div class="offres_class">
        <?php if(isset($offres))foreach ($offres as $offre): ?>
            <a href="/GameFolio/users/home/offres" class="lien_offre_class">
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
    <div class="games_race_class">
        <?php if(isset($games)) foreach ($games as $game): ?>
        <?php if ($game->getCategorie()=="combat"): ?>
            <article class="game_class">
                <a href="/GameFolio/users/home/games" class="lien_imageGame_class">
                    <img src="<?php echo $game->getUrlImage(); ?>" class="image_game_class" alt="logo"/>
                    <p class="info_jeu_class">Nom : <?php echo htmlspecialchars($game->getNomJeu(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="info_jeu_class">Catégorie : <?php echo htmlspecialchars($game->getCategorie(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="info_jeu_class">Prix : <?php echo $game->getPrix(); ?> euros</p>
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
                <a href="/GameFolio/users/home/games" class="lien_imageGame_class">
                    <img src="<?php echo $game->getUrlImage(); ?>" class="image_game_class" alt="logo"/>
                    <p class="info_jeu_class">Nom : <?php echo htmlspecialchars($game->getNomJeu(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="info_jeu_class">Catégorie : <?php echo htmlspecialchars($game->getCategorie(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="info_jeu_class">Prix : <?php echo $game->getPrix(); ?> euros</p>
                </a>
            </article>
            <?php endif ;  ?>
        <?php endforeach; ?>
    </div>
</section>