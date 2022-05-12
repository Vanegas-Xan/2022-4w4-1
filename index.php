<?php get_header(); ?>

<main class="site__main">
<section class="formation" >
<h2 class="main__titre">Liste des cours</h2>
<div class="formation__liste">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
       <section class="carte">     
           <?php 
              $mon_titre = get_the_title();
              $mon_titre_filtre = substr($mon_titre,8);
              $ma_duree = substr($mon_titre,strrpos($mon_titre, '(')); //(90h)
              $ma_duree = substr($ma_duree,1,-1); //90h
              $mon_sigle = substr($mon_titre,0,7);
              $mon_titre_filtre = substr($mon_titre_filtre,0,strrpos($mon_titre_filtre,'('));

            ?>

            
                <h3 class="carte__titre"><?php echo $mon_titre_filtre; ?></h3>
                <p class="carte_sigle"><?php echo $mon_sigle; ?></p>
                <p class="carte_sigle">Durée du cours: <?php echo $ma_duree; ?></p>
                <p class="carte__contenu"><?php echo get_the_excerpt(); ?></p>
            </section>     
        <?php endwhile ?>
    <?php endif ?>
    </div> 
</main>
</section>
<?php get_footer(); ?>
</body>
</html>