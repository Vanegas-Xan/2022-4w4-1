<?php get_header() ?>
<main class="site__main">
  

    <?php wp_nav_menu(array(
        "menu" => "accueil",
        "container" => "nav"  )); ?>

<?php wp_nav_menu(array(
        "menu" => "accueil_evenement",
        "container" => "nav"  )); ?>

    <h1 class="galerie"> Galerie Gutenberg</h1>

    <?php if (have_posts()): while(have_posts()):the_post() ?>
            
    <?php the_title(); ?>
    <?php the_content(); ?>
             <?php endwhile ?>    
              
    <?php endif ?>
     
</main>
<?php get_footer()?>
