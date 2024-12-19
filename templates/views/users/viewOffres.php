
<section class="section_view_offres_class">
    <h2 class="title_offer" id="title_offer_id">Les offres disponibles</h2>
    <div class="offres_class">
        <?php if(isset($dataAllOffres))foreach ($dataAllOffres as $offres): ?>
            <a href="/GameFolio/users/home/offres/<?php echo urlencode($offres->getNomOffre()); ?>" class="lien_offre_class">
                <article class="offre_class">
                    <p class="data_offre_class"><?php echo htmlspecialchars($offres->getNomOffre(),ENT_QUOTES,'UTF-8');?> disponible !</p>
                    <p class="data_offre_class">Réduction : <?php echo $offres->getReduction(); ?> euros</p>
                    <p class="data_offre_class">jeu de l'offre : <?php echo htmlspecialchars($offres->getGame()->getNomJeu(),ENT_QUOTES,'UTF-8');?></p>
                </article>
            </a>
        <?php endforeach ;  ?>
    </div>

</section>