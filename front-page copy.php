<?php get_header() ?>
<main class="site__main">
  
    <h1>----------Front-page.php-----------</h1>
    <?php wp_nav_menu(array(
        "menu" => "accueil",
        "container" => "nav"  )); ?>

<?php wp_nav_menu(array(
        "menu" => "accueil_evenement",
        "container" => "nav"  )); ?>



    <?php if (have_posts()): while(have_posts()):the_post() ?>
            
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
     
</main>
<?php get_footer()?>
