

<section class="section_detailsOffre_class">

    <h1>test viewDetailOffre</h1>

    <article class="article_offre_details_class">

        <div class="center_offre_details_class">
            <div class="offre_details_class">
                <?php if(isset($datasOffre)):?>
                    <p class="info_details_class"><?php if(isset($nomOffre)) echo "Details of ".$nomOffre?></p>
                    <p class="info_details_class"><?php echo $datasOffre->getNomOffre()?></p>
                    <p class="info_details_class"><?php echo $datasOffre->getReduction()?></p>
                <?php endif ;  ?>
            </div>
        </div>
    </article>

    <article class="article_game_details_class">

        <div class="center_game_offre_class">
            <div class="game_offre_class">
                <?php if(isset($datasOffre)):?>
                    <img src="<?php echo $datasOffre->getGame()->getUrlImage()?>">
                    <p class="info_details_class"><?php echo $datasOffre->getGame()->getNomJeu()?></p>
                    <p class="info_details_class"><?php echo $datasOffre->getGame()->getPrix()?></p>
                <?php endif ;  ?>
            </div>
        </div>

    </article>

</section>