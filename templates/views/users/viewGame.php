<?php $titre_page="Games";?>

<section>


    <h1 class="titre_jeuxCourses_class">Les jeux disponibles</h1>

    <div class="gallery">
        <?php if(isset($dataAllGames)) foreach ($dataAllGames as $game): ?>
        <div class="item">
            <a href="/GameFolio/users/home/games/<?php echo urlencode($game->getNomJeu()); ?>" class="lien_imageGame_class">
                <img src="<?php echo $game->getUrlImage() ?>" alt="Image 1">
                <p><?php echo $game->getNomJeu() ?></p>
                <p><?php echo $game->getCategorie() ?></p>
                <p><?php echo $game->getPrix() ?></p>
            </a>
        </div>
        <?php endforeach; ?>
    </div>


</section>