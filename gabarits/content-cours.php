<?php 

$categorie =  get_the_category();
//var_dump($categorie);
//echo $categorie[1]->$slug

?>
<article class="formation__cours  <?php echo $categorie[1]->$slug;?> ">
                <?php
              
                $titre = get_the_title();
                $titreFiltreCours = substr($titre, 7, -6);
                //$nbHeures = substr($titre, -6);
                $nbHeures = get_field( "nombre_dheures" ). " heures";
                $sigleCours = substr($titre, 0, 7);
                
                $descCours = get_the_content();
                ?>
                <code class="cours__invisible">  <?=  $descCours ?></code>
                <?php the_post_thumbnail("thumbnail"); ?>
                <h3 class="cours__titre">
                    <a href="<?php echo get_permalink(); ?>">
                        <?= $titreFiltreCours; ?>
                    </a>
                </h3>
                <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                <p class="cours__sigle"><?= $sigleCours; ?> </p>
                <p class="cours__departement"><?= $departement; ?> </p>
                <p class="cours__desc"> 
                    <?= wp_trim_words( $descCours,12,"<button class='cours__desc__bouton'>Suite<button>" ) ; ?></p>

            </article>