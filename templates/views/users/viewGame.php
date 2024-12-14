<?php $titre_page="Games";?>

<section>


    <h1 class="titre_jeuxCourses_class">Les jeux disponibles</h1>

    <div class="gallery">
        <?php if(isset($dataAllGames)) foreach ($dataAllGames as $game): ?>
        <article class="item">
            <a href="/GameFolio/users/home/games/<?php echo urlencode($game->getNomJeu()); ?>" class="lien_imageGame_class">
                <img src="<?php echo $game->getUrlImage() ?>" alt="Image 1" class="imgGame_class">
                <p class="info_jeu_class"><?php echo htmlspecialchars($game->getNomJeu(), ENT_QUOTES, 'UTF-8') ?></p>
                <p class="info_jeu_class"><?php echo htmlspecialchars($game->getCategorie(), ENT_QUOTES, 'UTF-8') ?></p>
                <p class="info_jeu_class"><?php echo $game->getPrix() ?></p>
            </a>
        </article>
        <?php endforeach; ?>
    </div>


</section>