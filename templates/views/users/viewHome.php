
<form class="form_recherche_class">
    <input type="text" placeholder="Recherche" class="input_recherche_class">
</form>

<section>
    <h2 class="title_offer">Les offres du jour</h2>
    <div class="offres_class">
        <?php foreach ($offres as $offre): ?>
            <a href="/GameFolio/users/home/offres" class="lien_offre_class">
                <article class="offre_class">
                    <p class="data_offre_class">Identifiant offre : <?php echo $offre->getId(); ?></p>
                    <p class="data_offre_class"><?php echo $offre->getNomOffre(); ?> disponible !</p>
                    <p class="data_offre_class">Réduction : <?php echo $offre->getReduction(); ?> euros</p>
                    <p class="data_offre_class">EST principale : <?php echo $offre->isPrincipale(); ?> </p>
                    <p class="data_offre_class">Identifiant jeu de l'offre : <?php echo $offre->getJeuVideoId(); ?></p>
                </article>
            </a>
        <?php endforeach; ?>
    </div>

</section>

<hr>

<section>
    <h2 class="title_figth_games">Jeux de combat</h2>
    <div class="games_race_class">
        <?php foreach ($jeuxCombat as $jeu): ?>
            <article class="game_class">
                <a href="/GameFolio/users/home/games" class="lien_imageGame_class">
                    <img src=<?php echo $jeu->getUrlImage(); ?> alt="logo" class="image_game_class"/>
                    <p class="info_jeu_class">ID : <?php echo $jeu->getId(); ?></p>
                    <p class="info_jeu_class">Nom : <?php echo $jeu->getNomJeu(); ?></p>
                    <p class="info_jeu_class">Catégorie : <?php echo $jeu->getCategorie(); ?></p>
                    <p class="info_jeu_class">Prix : <?php echo $jeu->getPrix(); ?> euros</p>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<hr>

<section>

    <h2 class="title_race_games">Jeux de course</h2>
    <div class="games_race_class">
        <?php foreach ($jeuxCourse as $jeu): ?>
            <article class="game_class">
                <a href="/GameFolio/users/home/games" class="lien_imageGame_class">
                    <img src=<?php echo $jeu->getUrlImage(); ?> alt="logo" class="image_game_class"/>
                    <p class="info_jeu_class">ID : <?php echo $jeu->getId(); ?></p>
                    <p class="info_jeu_class">Nom : <?php echo $jeu->getNomJeu(); ?></p>
                    <p class="info_jeu_class">Catégorie : <?php echo $jeu->getCategorie(); ?></p>
                    <p class="info_jeu_class">Prix : <?php echo $jeu->getPrix(); ?> euros</p>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>